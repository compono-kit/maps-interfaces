<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsFloatMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeFloatMap;

interface RepresentsImmutableNativeFloatMap extends RepresentsNativeFloatMap
{
	public function set( string|\Stringable $key, float $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeFloatMap|RepresentsFloatMap $map ): static;

	public function mergeMap( RepresentsNativeFloatMap|RepresentsFloatMap $map ): static;
}
