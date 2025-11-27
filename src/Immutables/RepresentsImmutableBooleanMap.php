<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutables;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;

interface RepresentsImmutableBooleanMap extends RepresentsBooleanMap
{
	public function exists( string|\Stringable $key ): bool;

	public function get( string|\Stringable $key ): RepresentsBoolean;

	public function set( string|\Stringable $key, RepresentsBoolean $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsBooleanMap $map ): static;

	public function mergeMap( RepresentsBooleanMap $map ): static;
}
