<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsMutableStringMap extends RepresentsStringMap, \ArrayAccess
{
	public function addMissing( RepresentsStringMap $map ): void;

	public function mergeMap( RepresentsStringMap $map ): void;
}
