<?php
use Zend\Expressive\Application;

require 'vendor/autoload.php';

$container = require 'config/container.php';

$app = $container->get(Application::class);
$app->run();