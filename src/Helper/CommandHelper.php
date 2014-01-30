<?php

namespace Helper;

/**
 * Class CommandHelper
 *
 * @since 1.0
 */
abstract class CommandHelper
{
	static public function loadFirstLevelCommnads($console)
	{
		$path = dirname(__DIR__) . '/Command';

		$dirs = new \FilesystemIterator($path);

		foreach ($dirs as $dir)
		{
			/** @var $file \SplFileInfo */
			if ($dir->isFile())
			{
				continue;
			}

			$class = 'Command\\' . $dir->getBasename() . '\\' . $dir->getBasename() . 'Command';

			if (class_exists($class) && is_subclass_of($class, '\\Joomla\\Console\\Command\\Command') && $class::$isEnabled)
			{
				$console->addCommand(new $class);
			}
		}
	}
}