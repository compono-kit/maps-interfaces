<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsMutableStringMap extends RepresentsStringMap, \ArrayAccess
{
	public function set( string|\Stringable $key, RepresentsString $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsStringMap $map ): void;

	public function mergeMap( RepresentsStringMap $map ): void;
}
