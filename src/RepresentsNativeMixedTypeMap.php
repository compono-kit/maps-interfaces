<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeMixedTypeMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeMixedTypeMap $map ): bool;

	/**
	 * @return array<string, float|int|string|bool|array>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): float|int|string|bool|array;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, float|int|string|bool|array>
	 */
	public function values(): \Iterator;

	public function count(): int;

	public function current(): float|int|string|bool|array;
}
