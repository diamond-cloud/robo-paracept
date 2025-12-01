<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirB;
use Codeception\Attribute\Group;
use PHPUnit\Framework\Attributes\Group as PhpUnitGroup;
class ExampleACest
{

    #[PhpUnitGroup('example')]
    #[Group('foo')]
    #[Group('bar')]
    public function testExampleGoFrom(): void
    {
        // nothing
    }
}
