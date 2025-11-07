<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeBooleanMap;

interface RepresentsMutableNativeBooleanMap extends RepresentsNativeBooleanMap, \ArrayAccess
{
	public function set( string|\Stringable $key, bool $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): void;

	public function mergeMap( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): void;
}
