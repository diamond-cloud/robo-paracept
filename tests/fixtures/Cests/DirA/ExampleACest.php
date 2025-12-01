<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirA;

use Codeception\Attribute\Group;
use PHPUnit\Framework\Attributes\Group as PhpUnitGroup;

class ExampleACest
{
    #[PhpUnitGroup('example')]
    #[Group('foo')]
    #[Group('bar')]
    #[Group('no')]
    public function testExampleGoTo(): void
    {
        // nothing
    }
}
