<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeBooleanMap;

interface RepresentsMutableNativeBooleanMap extends RepresentsNativeBooleanMap, \ArrayAccess
{
	public function addMissing( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): void;

	public function mergeMap( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): void;
}
