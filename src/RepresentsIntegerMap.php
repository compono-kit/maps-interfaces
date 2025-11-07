<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsInteger;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsIntegerMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsIntegerMap $map ): bool;

	/**
	 * @return array<string, RepresentsInteger>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, int>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsInteger;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, RepresentsInteger>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, int>
	 */
	public function nativeKeyValues(): \Iterator;

	public function count(): int;

	public function current(): RepresentsInteger;
}
