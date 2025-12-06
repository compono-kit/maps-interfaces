<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsMap extends RepresentsType, \Iterator, \Countable
{
	/**
	 * @return \Iterator<int, string>
	 */
	public function keys(): \Iterator;

	public function count(): int;

	/**
	 * @return array<string, float|int|string|bool|array>
	 */
	public function toNativeArray(): array;

	/**
	 * @return \Iterator<string, float|int|string|bool|array>
	 */
	public function nativeKeyValues(): \Iterator;

	public function toJson( bool $pretty = false ): string;
}
