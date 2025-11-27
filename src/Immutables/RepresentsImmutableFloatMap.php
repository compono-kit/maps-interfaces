<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Maps\Interfaces\RepresentsFloatMap;

interface RepresentsImmutableFloatMap extends RepresentsFloatMap
{
	public function exists( string|\Stringable $key ): bool;

	public function set( string|\Stringable $key, RepresentsFloat $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsFloatMap $map ): static;

	public function mergeMap( RepresentsFloatMap $map ): static;
}
