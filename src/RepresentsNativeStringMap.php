<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsNativeStringMap extends RepresentsType, \Iterator, \Countable
{
	public function equalsValues( RepresentsNativeStringMap $map ): bool;

	/**
	 * @return array<string, string>
	 */
	public function toNativeType(): array;

	public function get( string|\Stringable $key ): string;

	public function exists( string|\Stringable $key ): bool;

	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	/**
	 * @return \Iterator<int, string>
	 */
	public function values(): \Iterator;

	public function count(): int;

	public function current(): string;
}
