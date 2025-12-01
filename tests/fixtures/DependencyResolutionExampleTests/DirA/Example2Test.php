<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirA;

use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('example')]
class Example2Test extends TestCase
{



    #[Depends('testE')]
    public function testD()
    {
        self::assertTrue(true);
    }

    public function testE()
    {
        self::assertTrue(true);
    }
}
