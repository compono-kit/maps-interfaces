<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsNativeStringMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsMutableNativeStringMap extends RepresentsNativeStringMap, \ArrayAccess
{
	public function addMissing( RepresentsNativeStringMap|RepresentsStringMap $map ): void;

	public function mergeMap( RepresentsNativeStringMap|RepresentsStringMap $map ): void;
}
