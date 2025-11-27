<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeBooleanMap;

interface RepresentsImmutableNativeBooleanMap extends RepresentsNativeBooleanMap
{
	public function exists( string|\Stringable $key ): bool;

	public function get( string|\Stringable $key ): bool;

	public function set( string|\Stringable $key, bool $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): static;

	public function mergeMap( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): static;
}
