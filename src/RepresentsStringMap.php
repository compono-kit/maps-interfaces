<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

use ComponoKit\Types\Interfaces\RepresentsString;

interface RepresentsStringMap extends RepresentsTypeMap
{
	public function equalsValues( RepresentsStringMap $map ): bool;

	/**
	 * @return array<string, RepresentsString>
	 */
	public function toNativeType(): array;

	/**
	 * @return array<string, string>
	 */
	public function toNativeArray(): array;

	public function get( string|\Stringable $key ): RepresentsString;

	/**
	 * @return \Iterator<int, RepresentsString>
	 */
	public function values(): \Iterator;

	/**
	 * @return \Iterator<string, string>
	 */
	public function nativeKeyValues(): \Iterator;

	public function current(): RepresentsString;
}
