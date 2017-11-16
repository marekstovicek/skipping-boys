<?php

require __DIR__ . '/../vendor/autoload.php';

use Nette\Forms\Container;
use Nextras\Forms\Controls\DatePicker;

Container::extensionMethod('addDatePicker', function (Container $container, $name, $label = null){
    return $container[$name] = new DatePicker($label);
});


$configurator = new Nette\Configurator;

$configurator->setDebugMode(false); // enable for your remote IP
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
