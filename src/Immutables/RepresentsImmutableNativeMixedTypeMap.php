<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeMixedTypeMap;

interface RepresentsImmutableNativeMixedTypeMap extends RepresentsNativeMixedTypeMap
{
	public function exists( string|\Stringable $key ): bool;

	public function set( string|\Stringable $key, float|int|string|bool|array $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): static;

	public function mergeMap( RepresentsNativeMixedTypeMap|RepresentsMixedTypeMap $map ): static;
}
