<?php

/**
 * 
 * (c) Steven BŸhner <buehner@me.com>

 * @author steven
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RoleInterfaces;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module implements AutoloaderProviderInterface {

	public function getAutoloaderConfig() {
		return array (
				'Zend\Loader\StandardAutoloader' => array (
						'namespaces' => array (
								__NAMESPACE__ => __DIR__ . '/src/' . str_replace ( '\\', '/', __NAMESPACE__ ) 
						) 
				) 
		);
	}

	public function getConfig() {
		return include __DIR__ . '/config/module.config.php';
	}

	public function onBootstrap(MvcEvent $e) {
		// You may not need to do this if you're doing it elsewhere in your
		// application
		$eventManager = $e->getApplication ()->getEventManager ();
		$moduleRouteListener = new ModuleRouteListener ();
		$moduleRouteListener->attach ( $eventManager );
	}

}
