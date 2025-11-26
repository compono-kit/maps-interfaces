<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsNativeStringMap extends RepresentsMap
{
	public function equalsValues( RepresentsNativeStringMap $map ): bool;

	/**
	 * @return array<string, string>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, string>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): string;

	/**
	 * @return \Iterator<int, string>
	 */
	public function values(): \Iterator;

	public function current(): string;
}
