<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Mutables;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;

interface RepresentsMutableIntegerMap extends RepresentsIntegerMap, \ArrayAccess
{
	public function set( string|\Stringable $key, RepresentsInteger $value ): void;

	public function remove( string|\Stringable $key ): void;
}
