<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeIntegerMap;

interface RepresentsMutableNativeIntegerMap extends RepresentsNativeIntegerMap, \ArrayAccess
{
	public function set( string|\Stringable $key, int $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): void;

	public function mergeMap( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): void;
}
