<?php

declare(strict_types=1);

namespace CodelyTv\Tests\Shared\Infrastructure;

use CodelyTv\Shared\Domain\RandomNumberGenerator;

final class ConstantCurrentDateGenerator
{
    public function generate(): string
    {
		return "2023-01-01 00:00:00";
    }
}
