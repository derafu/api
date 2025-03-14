<?php

declare(strict_types=1);

/**
 * Derafu: API - API with Autodiscovery.
 *
 * Copyright (c) 2025 Esteban De La Fuente Rubio / Derafu <https://www.derafu.org>
 * Licensed under the MIT License.
 * See LICENSE file for more details.
 */

namespace Derafu\Api;

class Teapot
{
    public function __toString(): string
    {
        return "I'm a teapot";
    }
}
