<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;

interface RepresentsMutableMixedTypeMap extends RepresentsMixedTypeMap, \ArrayAccess
{
	public function addMissing( RepresentsMixedTypeMap $map ): void;

	public function mergeMap( RepresentsMixedTypeMap $map ): void;
}
