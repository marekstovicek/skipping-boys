<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
                               
                $router[] = new Route('seo/[<url>]', 'Admin:Seo:default');
                $router[] = new Route('content/[<url>]', 'Admin:Content:default');
                $router[] = new Route('admin/', 'Admin:HomePage:default');
                $router[] = new Route('login/', 'Admin:HomePage:login');
                $router[] = new Route('logout/', 'Admin:HomePage:logout');
                $router[] = new Route('reference/[<id>]', 'Admin:Reference:default');
                $router[] = new Route('reference/rm/<id>', 'Admin:Reference:remove');
                $router[] = new Route('gallery/[<url>]', 'Admin:Gallery:default');
                $router[] = new Route('video/[<url>]/[<id>]', 'Admin:Video:default');
                $router[] = new Route('video/rm/<url>/<id>', 'Admin:Video:remove');
                $router[] = new Route('gallery/rm/<url>/<id>', 'Admin:Gallery:remove');
                
                $router[] = new Route('[<action>/][<url>]', array(
                    'presenter' => 'Core:Page',
                    'action' => array(
                        Route::VALUE => 'default',
                        Route::FILTER_TABLE => array(
                            'o-nas' => 'about',
                            'vystoupeni' => 'show',
                            'galerie' => 'gallery',
                            'kontakt' => 'contact'
                        ),
                        Route::FILTER_STRICT => true
                    ),
                    'url' => null,
                ));
                 
                
                   
		return $router;
	}

}
