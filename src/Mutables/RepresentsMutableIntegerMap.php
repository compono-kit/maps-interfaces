<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;

interface RepresentsMutableIntegerMap extends RepresentsIntegerMap, \ArrayAccess
{
	public function addMissing( RepresentsIntegerMap $map ): void;

	public function mergeMap( RepresentsIntegerMap $map ): void;
}
