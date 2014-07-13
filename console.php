<?php

use Syringe\Component\DI\Container;

require_once __DIR__.'/vendor/autoload.php';

$configuration = require __DIR__ . '/config/appconfig.php';

(new Container($configuration))->get('app')->run();
