<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsMixedTypeMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsMixedTypeMap $map ): bool;

	/**
	 * @return array<string, RepresentsType>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, float|int|string|bool|array>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsType;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, RepresentsType>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, float|int|string|bool|array>
	 */
	public function nativeKeyValues(): \Iterator;

	public function count(): int;

	public function current(): RepresentsType;
}
