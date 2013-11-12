<?php

// Load the Composer autoloader
include __DIR__ . '/../vendor/autoload.php';

use Joomla\Console\Console;
use Joomla\Console\Output\Stdout;

$console = new Console(null, null, new Stdout);

$console
	// ->setName('Example Console')
	// ->setVersion('1.0')
	// ->setUsage('console <command> [option]')
	// ->setDescription('Hello World')
	/* ->setHelp(
		<<<HELP
Hello, this is an example console, if you want to do something, see above:

$ foo bar -h => foo bar --help

---------

$ foo bar yoo -q => foo bar yoo --quiet
HELP
	)*/;

$console->execute();
