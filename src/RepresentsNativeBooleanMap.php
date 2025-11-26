<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsNativeBooleanMap extends RepresentsMap
{
	public function equalsValues( RepresentsNativeBooleanMap $map ): bool;

	/**
	 * @return array<string, bool>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, bool>
	 */
	public function values(): \Iterator;

	public function current(): bool;
}
