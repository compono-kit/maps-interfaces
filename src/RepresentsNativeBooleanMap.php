<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeBooleanMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeBooleanMap $map ): bool;

	/**
	 * @return array<string, bool>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): bool;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, bool>
	 */
	public function values(): \Iterator;

	public function count(): int;

	public function current(): bool;
}
