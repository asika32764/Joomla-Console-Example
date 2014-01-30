<?php

namespace Command\Example;

use Joomla\Console\Command\Command;

/**
 * Class ExampleCommand
 *
 * @since 1.0
 */
class ExampleCommand extends Command
{
	/**
	 * Property isEnabled.
	 *
	 * @var  bool
	 */
	public static $isEnabled = true;

	/**
	 * Property name.
	 *
	 * @var  string
	 */
	public $name = 'example';

	/**
	 * Property description.
	 *
	 * @var  string
	 */
	public $description = 'Example description.';

	/**
	 * Property usage.
	 *
	 * @var  string
	 */
	public $usage = 'example <command> [option]';

	/**
	 * configure
	 *
	 * @return  void
	 */
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

	/**
	 * doExecute
	 *
	 * @return  int
	 */
	public function doExecute()
	{
		$this->out('Example Command');

		return 0;
	}
}