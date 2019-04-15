<?php

declare(strict_types=1);

namespace Tests;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

trait GetReflectionMethod
{
    /** @throws ReflectionException */
    protected static function getMethod(string $object, string $name): ReflectionMethod
    {
        $class = new ReflectionClass($object);
        $method = $class->getMethod($name);
        $method->setAccessible(true);

        return $method;
    }
}
