<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsNativeIntegerMap extends RepresentsMap
{
	public function equalsValues( RepresentsNativeIntegerMap $map ): bool;

	/**
	 * @return array<string, int>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, int>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): int;

	/**
	 * @return \Iterator<int, int>
	 */
	public function values(): \Iterator;

	public function current(): int;
}
