<?php

namespace App\Model;

use Nette\Database\UniqueConstraintViolationException;
use Nette\Security\AuthenticationException;
use Nette\Security\IAuthenticator;
use Nette\Security\Identity;
use Nette\Security\Passwords;


/**
 * Users management.
 */
class UserManager extends BaseManager implements IAuthenticator
{
	

	const
		TABLE_NAME = 'user',
		COLUMN_ID = 'user_id',
		COLUMN_NAME = 'username',
		COLUMN_PASSWORD_HASH = 'password',
		COLUMN_ROLE = 'role';
	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;

		$row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_NAME, $username)->fetch();

		if (!$row) {
			throw new AuthenticationException('Uživatelské jméno neexistuje.', self::IDENTITY_NOT_FOUND);

		} elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD_HASH])) {
			throw new AuthenticationException('Heslo není správné.', self::INVALID_CREDENTIAL);

		} elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD_HASH])) {
			$row->update([
				self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
			]);
		}

		// Příprava uživatelských dat.
                $userData = $row->toArray(); // Extrahuje uživatelská data.
                unset($userData[self::COLUMN_PASSWORD_HASH]); // Odstraní položku hesla z uživatelských dat (kvůli bezpečnosti).

                // Vrátí novou identitu přihlášeného uživatele.
                return new Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $userData);
	}


	/**
	 * Adds new user.
	 * @param  string
	 * @param  string
	 * @param  string
	 * @return void
	 * @throws DuplicateNameException
	 */
	public function add($username, $email, $password)
	{
		try {
			$this->database->table(self::TABLE_NAME)->insert([
				self::COLUMN_NAME => $username,
				self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
				self::COLUMN_EMAIL => $email,
			]);
		} catch (UniqueConstraintViolationException $e) {
			throw new DuplicateNameException;
		}
	}

}



class DuplicateNameException extends AuthenticationException
{
     public function __construct()
        {
                parent::__construct();
                $this->message = 'Uživatel s tímto jménem je již zaregistrovaný.';
        }
}
