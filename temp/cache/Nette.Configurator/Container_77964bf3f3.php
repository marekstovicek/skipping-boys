<?php
// source: /home/marek/sbweb/app/config/config.neon 
// source: /home/marek/sbweb/app/config/config.local.neon 

class Container_77964bf3f3 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Security\IAuthorizator' => [1 => ['security.authorizator']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'IPub\VisualPaginator\Components\IControl' => [1 => ['visualPaginator.paginator']],
			'App\Model\BaseManager' => [
				1 => [
					'26_App_CoreModule_Model_GalleryManager',
					'27_App_CoreModule_Model_PageManager',
					'28_App_CoreModule_Model_ShowManager',
					'29_App_CoreModule_Model_VideoManager',
					'30_App_Model_BaseManager',
					'authenticator',
				],
			],
			'Nette\Object' => [
				1 => [
					'26_App_CoreModule_Model_GalleryManager',
					'27_App_CoreModule_Model_PageManager',
					'28_App_CoreModule_Model_ShowManager',
					'29_App_CoreModule_Model_VideoManager',
					'30_App_Model_BaseManager',
					'authenticator',
				],
			],
			'App\CoreModule\Model\GalleryManager' => [1 => ['26_App_CoreModule_Model_GalleryManager']],
			'App\CoreModule\Model\PageManager' => [1 => ['27_App_CoreModule_Model_PageManager']],
			'App\CoreModule\Model\ShowManager' => [1 => ['28_App_CoreModule_Model_ShowManager']],
			'App\CoreModule\Model\VideoManager' => [1 => ['29_App_CoreModule_Model_VideoManager']],
			'Nette\Security\IAuthenticator' => [1 => ['authenticator']],
			'App\Model\UserManager' => [1 => ['authenticator']],
			'App\AdminModule\Presenters\BaseAdminPresenter' => [
				1 => [
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'App\Presenters\BasePresenter' => [
				1 => [
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\Presenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
				],
			],
			'ArrayAccess' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.10',
				],
			],
			'App\AdminModule\Presenters\VideoPresenter' => [1 => ['application.1']],
			'App\AdminModule\Presenters\HomePagePresenter' => [1 => ['application.2']],
			'App\AdminModule\Presenters\ReferencePresenter' => [1 => ['application.3']],
			'App\AdminModule\Presenters\SeoPresenter' => [1 => ['application.4']],
			'App\AdminModule\Presenters\GalleryPresenter' => [1 => ['application.5']],
			'App\AdminModule\Presenters\ContentPresenter' => [1 => ['application.6']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.7']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.8']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.9']],
			'App\CoreModule\Presenters\PagePresenter' => [1 => ['application.10']],
			'NetteModule\ErrorPresenter' => [1 => ['application.11']],
			'NetteModule\MicroPresenter' => [1 => ['application.12']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'26_App_CoreModule_Model_GalleryManager' => 'App\CoreModule\Model\GalleryManager',
			'27_App_CoreModule_Model_PageManager' => 'App\CoreModule\Model\PageManager',
			'28_App_CoreModule_Model_ShowManager' => 'App\CoreModule\Model\ShowManager',
			'29_App_CoreModule_Model_VideoManager' => 'App\CoreModule\Model\VideoManager',
			'30_App_Model_BaseManager' => 'App\Model\BaseManager',
			'application.1' => 'App\AdminModule\Presenters\VideoPresenter',
			'application.10' => 'App\CoreModule\Presenters\PagePresenter',
			'application.11' => 'NetteModule\ErrorPresenter',
			'application.12' => 'NetteModule\MicroPresenter',
			'application.2' => 'App\AdminModule\Presenters\HomePagePresenter',
			'application.3' => 'App\AdminModule\Presenters\ReferencePresenter',
			'application.4' => 'App\AdminModule\Presenters\SeoPresenter',
			'application.5' => 'App\AdminModule\Presenters\GalleryPresenter',
			'application.6' => 'App\AdminModule\Presenters\ContentPresenter',
			'application.7' => 'App\Presenters\HomepagePresenter',
			'application.8' => 'App\Presenters\Error4xxPresenter',
			'application.9' => 'App\Presenters\ErrorPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'authenticator' => 'App\Model\UserManager',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\IRouter',
			'security.authorizator' => 'Nette\Security\IAuthorizator',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'visualPaginator.paginator' => 'IPub\VisualPaginator\Components\Control',
		],
		'tags' => [
			'inject' => [
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.11' => TRUE,
				'application.12' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
				'visualPaginator.paginator' => TRUE,
			],
			'nette.presenter' => [
				'application.1' => 'App\AdminModule\Presenters\VideoPresenter',
				'application.10' => 'App\CoreModule\Presenters\PagePresenter',
				'application.11' => 'NetteModule\ErrorPresenter',
				'application.12' => 'NetteModule\MicroPresenter',
				'application.2' => 'App\AdminModule\Presenters\HomePagePresenter',
				'application.3' => 'App\AdminModule\Presenters\ReferencePresenter',
				'application.4' => 'App\AdminModule\Presenters\SeoPresenter',
				'application.5' => 'App\AdminModule\Presenters\GalleryPresenter',
				'application.6' => 'App\AdminModule\Presenters\ContentPresenter',
				'application.7' => 'App\Presenters\HomepagePresenter',
				'application.8' => 'App\Presenters\Error4xxPresenter',
				'application.9' => 'App\Presenters\ErrorPresenter',
			],
			'cms.components' => ['visualPaginator.paginator' => TRUE],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.authorizator' => 'security.authorizator',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct()
	{
		parent::__construct([
			'appDir' => '/home/marek/sbweb/app',
			'wwwDir' => '/home/marek/sbweb/www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'consoleMode' => FALSE,
			'tempDir' => '/home/marek/sbweb/app/../temp',
			'page' => 'Core:Page',
			'administration' => 'Admin:HomePage',
			'content' => 'Admin:Content',
			'seo' => 'Admin:Seo',
			'gallery' => 'Admin:Gallery',
			'reference' => 'Admin:Reference',
			'video' => 'Admin:Video',
			'guest' => 'guest',
			'member' => 'member',
			'admin' => 'admin',
		]);
	}


	/**
	 * @return App\CoreModule\Model\GalleryManager
	 */
	public function createService__26_App_CoreModule_Model_GalleryManager()
	{
		$service = new App\CoreModule\Model\GalleryManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\CoreModule\Model\PageManager
	 */
	public function createService__27_App_CoreModule_Model_PageManager()
	{
		$service = new App\CoreModule\Model\PageManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\CoreModule\Model\ShowManager
	 */
	public function createService__28_App_CoreModule_Model_ShowManager()
	{
		$service = new App\CoreModule\Model\ShowManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\CoreModule\Model\VideoManager
	 */
	public function createService__29_App_CoreModule_Model_VideoManager()
	{
		$service = new App\CoreModule\Model\VideoManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\BaseManager
	 */
	public function createService__30_App_Model_BaseManager()
	{
		$service = new App\Model\BaseManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\VideoPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\AdminModule\Presenters\VideoPresenter($this->getService('29_App_CoreModule_Model_VideoManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\CoreModule\Presenters\PagePresenter
	 */
	public function createServiceApplication__10()
	{
		$service = new App\CoreModule\Presenters\PagePresenter($this->getService('27_App_CoreModule_Model_PageManager'),
			$this->getService('28_App_CoreModule_Model_ShowManager'), $this->getService('29_App_CoreModule_Model_VideoManager'),
			$this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__11()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__12()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\HomePagePresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\AdminModule\Presenters\HomePagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\ReferencePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\AdminModule\Presenters\ReferencePresenter($this->getService('28_App_CoreModule_Model_ShowManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\SeoPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\AdminModule\Presenters\SeoPresenter($this->getService('27_App_CoreModule_Model_PageManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\GalleryPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new App\AdminModule\Presenters\GalleryPresenter($this->getService('26_App_CoreModule_Model_GalleryManager'),
			$this->getService('27_App_CoreModule_Model_PageManager'), $this->getService('29_App_CoreModule_Model_VideoManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\ContentPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new App\AdminModule\Presenters\ContentPresenter($this->getService('27_App_CoreModule_Model_PageManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__8()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectGalleryManager($this->getService('26_App_CoreModule_Model_GalleryManager'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__9()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, '/home/marek/sbweb/app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return App\Model\UserManager
	 */
	public function createServiceAuthenticator()
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/home/marek/sbweb/app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/home/marek/sbweb/app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=skippingboys',
			'root', 'root', ['lazy' => TRUE]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_77964bf3f3_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), NULL);
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\IAuthorizator
	 */
	public function createServiceSecurity__authorizator()
	{
		$service = new Nette\Security\Permission;
		$service->addRole('guest', NULL);
		$service->addRole('member', ['guest']);
		$service->addRole('admin', NULL);
		$service->addResource('Core:Page');
		$service->allow('guest', 'Core:Page');
		$service->allow('member', 'Core:Page');
		$service->allow('admin', 'Core:Page');
		$service->addResource('Admin:HomePage');
		$service->addResource('Admin:Content');
		$service->addResource('Admin:Seo');
		$service->addResource('Admin:Gallery');
		$service->addResource('Admin:Reference');
		$service->addResource('Admin:Video');
		$service->allow('guest', 'Admin:HomePage', 'login');
		$service->allow('admin', 'Admin:HomePage', 'default');
		$service->allow('admin', 'Admin:HomePage', 'logout');
		$service->allow('admin', 'Admin:Seo', 'default');
		$service->allow('admin', 'Admin:Content', 'default');
		$service->allow('admin', 'Admin:Gallery', 'default');
		$service->allow('admin', 'Admin:Gallery', 'remove');
		$service->allow('admin', 'Admin:Reference', 'default');
		$service->allow('admin', 'Admin:Reference', 'remove');
		$service->allow('admin', 'Admin:Video', 'default');
		$service->allow('admin', 'Admin:Video', 'remove');
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('authenticator'),
			$this->getService('security.authorizator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return IPub\VisualPaginator\Components\IControl
	 */
	public function createServiceVisualPaginator__paginator()
	{
		return new Container_77964bf3f3_IPub_VisualPaginator_Components_IControlImpl_visualPaginator_paginator($this);
	}


	public function initialize()
	{
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", FALSE)) { $tmp->start(); Tracy\Debugger::dispatch(); };
		Nextras\Forms\Bridges\NetteDI\FormsExtension::registerControls();
	}

}



class Container_77964bf3f3_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_77964bf3f3 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/home/marek/sbweb/app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		$service->onCompile[] = function ($engine) { Nextras\Forms\Bridges\Latte\Macros\BS3InputMacros::install($engine->getCompiler()); };
		return $service;
	}

}



class Container_77964bf3f3_IPub_VisualPaginator_Components_IControlImpl_visualPaginator_paginator implements IPub\VisualPaginator\Components\IControl
{
	private $container;


	public function __construct(Container_77964bf3f3 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new IPub\VisualPaginator\Components\Control($templateFile);
		$service->injectTranslator();
		return $service;
	}

}
