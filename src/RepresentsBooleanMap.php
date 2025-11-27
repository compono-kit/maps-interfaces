<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsBoolean;

interface RepresentsBooleanMap extends RepresentsTypeMap
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

	/**
	 * @return \Iterator<int, RepresentsBoolean>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, bool>
	 */
	public function nativeKeyValues(): \Iterator;

	public function current(): RepresentsBoolean;
}
