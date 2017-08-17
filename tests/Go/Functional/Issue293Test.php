<?php
declare(strict_types = 1);

namespace Go\Functional;

use Go\Tests\TestProject\Application\Issue293DynamicMembers;
use Go\Tests\TestProject\Application\Issue293StaticMembers;

class Issue293Test extends BaseFunctionalTest
{
    /**
     * test for https://github.com/goaop/framework/issues/293
     */
    public function testItDoesNotWeaveDynamicMethodsForComplexStaticPointcut()
    {
        $this->assertClassIsWoven(Issue293StaticMembers::class);

        // it does not weaves Issue293DynamicMembers class
        $this->assertClassIsNotWoven(Issue293DynamicMembers::class);
    }
}
