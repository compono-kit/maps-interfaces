<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsNativeMixedTypeMap extends RepresentsMap
{
	public function equalsValues( RepresentsNativeMixedTypeMap $map ): bool;

	/**
	 * @return array<string, float|int|string|bool|array>
	 */
	public function toNativeType(): array;

	/**
	 * @return \Iterator<int, float|int|string|bool|array>
	 */
	public function values(): \Iterator;

	public function current(): float|int|string|bool|array;
}
