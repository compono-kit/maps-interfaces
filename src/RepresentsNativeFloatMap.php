<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeFloatMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeFloatMap $map ): bool;

	/**
	 * @return array<string, float>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): float;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, float>
	 */
	public function values(): \Iterator;

	public function count(): int;

	public function current(): float;
}
