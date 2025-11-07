<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeIntegerMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeIntegerMap $map ): bool;

	/**
	 * @return array<string, int>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): int;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, int>
	 */
	public function values(): \Iterator;

	public function count(): int;

	public function current(): int;
}
