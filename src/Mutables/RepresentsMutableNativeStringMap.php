<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsNativeStringMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsMutableNativeStringMap extends RepresentsNativeStringMap, \ArrayAccess
{
	public function set( string|\Stringable $key, string $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsNativeStringMap|RepresentsStringMap $map ): void;

	public function mergeMap( RepresentsNativeStringMap|RepresentsStringMap $map ): void;
}
