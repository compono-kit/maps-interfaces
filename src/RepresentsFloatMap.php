<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsFloat;

interface RepresentsFloatMap extends RepresentsTypeMap
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

	/**
	 * @return \Iterator<int, RepresentsFloat>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, float>
	 */
	public function nativeKeyValues(): \Iterator;

	public function current(): RepresentsFloat;
}
