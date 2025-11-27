<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;

interface RepresentsMutableBooleanMap extends RepresentsBooleanMap, \ArrayAccess
{
	public function addMissing( RepresentsBooleanMap $map ): void;

	public function mergeMap( RepresentsBooleanMap $map ): void;
}
