<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsType;
use ComponoKit\Types\Maps\Interfaces\RepresentsMixedTypeMap;

interface RepresentsImmutableMixedTypeMap extends RepresentsMixedTypeMap
{
	public function set( string|\Stringable $key, RepresentsType $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsMixedTypeMap $map ): static;

	public function mergeMap( RepresentsMixedTypeMap $map ): static;
}
