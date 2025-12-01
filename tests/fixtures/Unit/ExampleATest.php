<?php

namespace Tests\Codeception\Task\fixtures\Unit;


use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group as PhpUnitGroup;
use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;

class ExampleATest extends TestCase
{
    #[Group('foo')]
    #[Group('bar')]
    #[PhpUnitGroup('example')]
    #[Depends('testB')]
    public function testA(): void
    {
        $this->assertTrue(false);
    }

    #[Group('foo')]
    #[Group('bar')]
    #[Group('no')]
    #[PhpUnitGroup('example')]
    public function testB(): void
    {
        $this->assertTrue(false);
    }
}
