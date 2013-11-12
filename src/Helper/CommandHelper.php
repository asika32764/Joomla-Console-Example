<?php

namespace Helper;

abstract class CommandHelper
{
	static public function loadFirstLevelCommnads($console)
	{
		$dir = dirname(__DIR__) . '/Command';

		$files = new \FilesystemIterator($dir);

		foreach ($files as $file)
		{
			/** @var $file \SplFileInfo */
			if ($file->isDir())
			{
				continue;
			}

			$class = 'Command\\' . $file->getFilename('.php');

			if (class_exists($class) && is_callable($class))
			{
				$console->addCommand(new $class);
			}
		}
	}
}