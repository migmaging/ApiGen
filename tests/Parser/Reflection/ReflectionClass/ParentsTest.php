<?php declare(strict_types=1);

namespace ApiGen\Tests\Parser\Reflection\ReflectionClass;

use ApiGen\Contracts\Parser\Reflection\ClassReflectionInterface;
use ApiGen\Tests\Parser\Reflection\ReflectionClassSource\ParentClass;

class ParentsTest extends AbstractReflectionClassTestCase
{
    public function testGetParentClass(): void
    {
        $this->assertInstanceOf(ClassReflectionInterface::class, $this->reflectionClass->getParentClass());
    }

    public function testGetParentClassName(): void
    {
        $this->assertSame(ParentClass::class, $this->reflectionClass->getParentClassName());
    }

    public function testGetParentClasses(): void
    {
        $this->assertCount(1, $this->reflectionClass->getParentClasses());
    }

    public function testGetDirectSubClasses(): void
    {
        $this->assertCount(1, $this->reflectionClassOfParent->getDirectSubClasses());
    }

    public function testIndirectSubClasses(): void
    {
        $this->assertCount(0, $this->reflectionClassOfParent->getIndirectSubClasses());
    }
}
