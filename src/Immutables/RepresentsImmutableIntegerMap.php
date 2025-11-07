<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutable;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;

interface RepresentsImmutableIntegerMap extends RepresentsIntegerMap
{
	public function set( string|\Stringable $key, RepresentsInteger $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsIntegerMap $map ): static;

	public function mergeMap( RepresentsIntegerMap $map ): static;
}
