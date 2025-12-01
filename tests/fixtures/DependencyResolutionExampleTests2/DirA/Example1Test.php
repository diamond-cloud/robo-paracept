<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests2\DirA;

use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('example')]
class Example1Test extends TestCase
{

    #[Depends('testB')]
    public function testA()
    {
        $this->markTestSkipped('Just a test ... test');
    }

    #[Depends('testA')]
    public function testB()
    {
        $this->markTestSkipped('Just a test ... test');
    }
}
