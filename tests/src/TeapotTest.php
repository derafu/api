<?php

declare(strict_types=1);

/**
 * Derafu: API - API with Autodiscovery.
 *
 * Copyright (c) 2025 Esteban De La Fuente Rubio / Derafu <https://www.derafu.org>
 * Licensed under the MIT License.
 * See LICENSE file for more details.
 */

namespace Derafu\TestsApi;

use Derafu\Api\Teapot;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Teapot::class)]
class TeapotTest extends TestCase
{
    public function testDummyAssertTrue(): void
    {
        $this->assertSame("I'm a teapot", (string)(new Teapot()));
    }
}
