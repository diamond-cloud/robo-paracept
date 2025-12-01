<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirC;
use Codeception\Attribute\Group;
use PHPUnit\Framework\Attributes\Group as PhpUnitGroup;
class ExampleACest
{

    #[PhpUnitGroup('example')]
    #[Group('bar')]
    #[Group('no')]
    public function testExampleStayHere(): void
    {
        // nothing
    }
}
