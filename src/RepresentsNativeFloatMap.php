<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsNativeFloatMap extends RepresentsMap
{
	public function equalsValues( RepresentsNativeFloatMap $map ): bool;

	/**
	 * @return array<string, float>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, float>
	 */
	public function toNativeArray(): array;

	/**
	 * @return \Iterator<int, float>
	 */
	public function values(): \Iterator;

	public function current(): float;
}
