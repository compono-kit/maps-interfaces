<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsBoolean;
use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsBooleanMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsBooleanMap $map ): bool;

	/**
	 * @return array<string, RepresentsBoolean>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, bool>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsBoolean;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, RepresentsBoolean>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, bool>
	 */
	public function nativeKeyValues(): \Iterator;

	public function count(): int;

	public function current(): RepresentsBoolean;
}
