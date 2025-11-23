<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Maps\Interfaces\RepresentsFloatMap;

interface RepresentsMutableFloatMap extends RepresentsFloatMap, \ArrayAccess
{
	public function set( string|\Stringable $key, RepresentsFloat $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsFloatMap $map ): void;

	public function mergeMap( RepresentsFloatMap $map ): void;
}
