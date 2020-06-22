<?php

namespace Madnest\MadstoreCash\Tests;

use Orchestra\Testbench\TestCase;
use Madnest\MadstoreCash\MadstoreCashServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MadstoreCashServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
