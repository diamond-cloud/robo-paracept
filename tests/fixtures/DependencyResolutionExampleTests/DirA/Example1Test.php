<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirA;


use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;


class Example1Test extends TestCase
{

    #[Group('example')]
    #[Depends('testB')]
    public function testA(): void
    {
        self::assertTrue(true);
    }


    public function testB(): void
    {
        self::assertTrue(true);
    }


    #[depends('testA')]
    public function testC(): void
    {
        self::assertTrue(true);
    }
}
