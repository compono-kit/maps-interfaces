<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsIntegerMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeIntegerMap;

interface RepresentsImmutableNativeIntegerMap extends RepresentsNativeIntegerMap
{
	public function set( string|\Stringable $key, int $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): static;

	public function mergeMap( RepresentsNativeIntegerMap|RepresentsIntegerMap $map ): static;
}
