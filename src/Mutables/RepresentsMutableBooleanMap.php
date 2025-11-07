<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutable;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;

interface RepresentsMutableBooleanMap extends RepresentsBooleanMap, \ArrayAccess
{
	public function set( string|\Stringable $key, RepresentsBoolean $value ): void;

	public function remove( string|\Stringable $key ): void;

	public function addMissing( RepresentsBooleanMap $map ): void;

	public function mergeMap( RepresentsBooleanMap $map ): void;
}
