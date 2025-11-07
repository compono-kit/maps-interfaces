<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces\Immutable;

use ComponoKit\Types\Maps\Interfaces\RepresentsNativeStringMap;
use ComponoKit\Types\Maps\Interfaces\RepresentsStringMap;

interface RepresentsImmutableNativeStringMap extends RepresentsNativeStringMap
{
	public function set( string|\Stringable $key, string $value ): static;

	public function remove( string|\Stringable $key ): static;

	public function addMissing( RepresentsNativeStringMap|RepresentsStringMap $map ): static;

	public function mergeMap( RepresentsNativeStringMap|RepresentsStringMap $map ): static;
}
