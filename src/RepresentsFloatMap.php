<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsFloat;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsFloatMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsFloatMap $map ): bool;

	/**
	 * @return array<string, RepresentsFloat>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, float>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsFloat;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, RepresentsFloat>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, float>
	 */
	public function nativeKeyValues(): \Iterator;

	public function count(): int;

	public function current(): RepresentsFloat;
}
