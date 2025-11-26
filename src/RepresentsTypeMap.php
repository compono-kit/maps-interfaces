<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsType;

interface RepresentsTypeMap extends RepresentsMap
{
	/**
	 * @return array<string, int|float|string|bool|array>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsType;

	/**
	 * @return \Iterator<int, RepresentsType>
	 */
	public function values(): \Iterator;

	public function current(): RepresentsType;
}
