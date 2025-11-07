<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeMixedTypeMap;

interface RepresentsMutableNativeMixedTypeMap extends RepresentsNativeMixedTypeMap, \ArrayAccess
{
	public function set( string|\Stringable $key, float|int|string|bool|array $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): void;

	public function mergeMap( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): void;
}
