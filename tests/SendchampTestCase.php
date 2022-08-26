<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Tests;

use Adedaramola\Sendchamp\Providers\SendchampServiceProvider;
use Orchestra\Testbench\TestCase;

class SendchampTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            SendchampServiceProvider::class
        ];
    }
}
