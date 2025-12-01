<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirB;

use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('example')]
class Example3Test extends TestCase
{

    public function testF(): void
    {
        self::assertTrue(true);
    }

    public function testG(): void
    {
        self::assertTrue(true);
    }
}
