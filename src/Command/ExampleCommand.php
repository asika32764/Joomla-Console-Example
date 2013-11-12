<?php

namespace Command;

use Joomla\Console\Command\Command;

class ExampleCommand extends Command
{
	public $name = 'example';

	public $description = 'Example description.';

	//	public $usage = 'example <command> [option]';

	public function configure()
	{
		/*
		$this->addArgument(new ExampleCommand)
			->addOption(
				'a',
				0,
				'desc'
			);
		*/
	}

	public function doExecute()
	{
		$this->out('Example Command');

		return 0;
	}
}