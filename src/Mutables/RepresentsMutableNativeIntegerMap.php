<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeIntegerMap;

interface RepresentsMutableNativeIntegerMap extends RepresentsNativeIntegerMap, \ArrayAccess
{
	public function addMissing( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): void;

	public function mergeMap( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): void;
}
