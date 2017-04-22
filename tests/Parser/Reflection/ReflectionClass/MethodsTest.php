<?php declare(strict_types=1);

namespace ApiGen\Tests\Parser\Reflection\ReflectionClass;

use ApiGen\Contracts\Parser\Reflection\MethodReflectionInterface;

final class MethodsTest extends AbstractReflectionClassTestCase
{
    public function testGetMethod(): void
    {
        $this->assertInstanceOf(MethodReflectionInterface::class, $this->reflectionClass->getMethod('publicMethod'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetMethodNonExisting(): void
    {
        $this->reflectionClass->getMethod('notPresentMethod');
    }

    public function testGetMethods(): void
    {
        $this->assertCount(5, $this->reflectionClass->getMethods());
    }

    public function testGetOwnMethods(): void
    {
        $this->assertCount(3, $this->reflectionClass->getOwnMethods());
    }

    public function testGetInheritedMethods(): void
    {
        $this->assertCount(1, $this->reflectionClass->getInheritedMethods());
    }

    public function testGetUsedMethods(): void
    {
        $this->assertCount(1, $this->reflectionClass->getUsedMethods());
    }
}
