<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeMixedTypeMap;

interface RepresentsMutableNativeMixedTypeMap extends RepresentsNativeMixedTypeMap, \ArrayAccess
{
	public function addMissing( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): void;

	public function mergeMap( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): void;
}
