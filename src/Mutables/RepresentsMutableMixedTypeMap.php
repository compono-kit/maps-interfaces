<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutable;

use ComponoKit\Types\Interfaces\RepresentsType;
use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;

interface RepresentsMutableMixedTypeMap extends RepresentsMixedTypeMap, \ArrayAccess
{
	public function set( string|\Stringable $key, RepresentsType $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsMixedTypeMap $map ): void;

	public function mergeMap( RepresentsMixedTypeMap $map ): void;
}
