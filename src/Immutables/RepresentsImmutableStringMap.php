<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutable;

use ComponoKit\Types\Interfaces\RepresentsString;
use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsImmutableStringMap extends RepresentsStringMap
{
	public function set( string|\Stringable $key, RepresentsString $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsStringMap $map ): static;

	public function mergeMap( RepresentsStringMap $map ): static;
}
