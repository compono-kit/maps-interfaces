<?php declare(strict_types=1);

namespace ComponoKit\Types\Maps\Interfaces;

interface RepresentsTypeMap extends RepresentsMap
{
	/**
	 * @return array<string, int|float|string|bool|array>
	 */
	public function toNativeArray(): array;
}
