<?php

// Load the Composer autoloader
include __DIR__ . '/../vendor/autoload.php';

use Joomla\Console\Console;
use Joomla\Console\Output\Stdout;

$console = new Console(null, null, new Stdout);

$console->execute();
