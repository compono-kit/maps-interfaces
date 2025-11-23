<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsFloatMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeFloatMap;

interface RepresentsMutableNativeFloatMap extends RepresentsNativeFloatMap, \ArrayAccess
{
	public function set( string|\Stringable $key, float $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsNativeFloatMap|RepresentsFloatMap $map ): void;

	public function mergeMap( RepresentsNativeFloatMap|RepresentsFloatMap $map ): void;
}
