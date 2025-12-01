<?php

namespace Tests\Codeception\Task\fixtures\Unit;

use Codeception\Attribute\Depends;
use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Group as PHPUnitGroup;
class ExampleBTest extends TestCase
{

    #[Group('baz')]
    #[Group('bar')]
    #[PHPUnitGroup('example')]
    #[Depends('testB')]
    public function testA(): void
    {
        $this->assertTrue(false);
    }

    #[Group('foo')]
    #[Group('baz')]
    #[Group('no')]
    #[PHPUnitGroup('example')]
    public function testB(): void
    {
        $this->assertTrue(false);
    }
}
