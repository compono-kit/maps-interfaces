<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsBooleanMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsNativeBooleanMap;

interface RepresentsImmutableNativeBooleanMap extends RepresentsNativeBooleanMap
{
	public function set( string|\Stringable $key, bool $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): static;

	public function mergeMap( RepresentsNativeBooleanMap|RepresentsBooleanMap $map ): static;
}
