<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsInteger;

interface RepresentsIntegerMap extends RepresentsTypeMap
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

	/**
	 * @return \Iterator<int, RepresentsInteger>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, int>
	 */
	public function nativeKeyValues(): \Iterator;

	public function current(): RepresentsInteger;
}
