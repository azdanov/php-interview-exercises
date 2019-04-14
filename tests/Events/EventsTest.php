<?php

declare(strict_types=1);

namespace Tests\Events;

use Exercises\Events\Events;
use PHPUnit\Framework\TestCase;
use function method_exists;

final class EventsTest extends TestCase
{
    public function testHasProperty(): void
    {
        self::markTestSkipped();
        self::assertClassHasAttribute('events', Events::class);
    }

    public function testHasMethods(): void
    {
        self::markTestSkipped();
        self::assertTrue(
            method_exists(Events::class, 'on'),
            'Class does not have method on'
        );
        self::assertTrue(
            method_exists(Events::class, 'fire'),
            'Class does not have method fire'
        );
        self::assertTrue(
            method_exists(Events::class, 'off'),
            'Class does not have method off'
        );
    }

    public function testOnAndFire(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new Events();

        $callback = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback);
        $events->fire('load');

        self::assertSame(1, $counter);
    }

    public function testOnAndFireMultipleCallbacks(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new Events();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('load', $callback2);
        $events->fire('load');

        self::assertSame(2, $counter);
    }

    public function testOnAndFireMultipleTimes(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new Events();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('load', $callback2);
        $events->fire('load');
        $events->fire('load');
        $events->fire('load');

        self::assertSame(6, $counter);
    }

    public function testOnAndFireWithDifferentNames(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new Events();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('visit', $callback2);
        $events->on('load', $callback2);
        $events->fire('load');
        $events->fire('visit');
        $events->fire('load');

        self::assertSame(5, $counter);
    }

    public function testOff(): void
    {
        self::markTestSkipped();
        $counter = 0;
        $events = new Events();
        $callback1 = static function () use (&$counter): void {
            ++$counter;
        };
        $callback2 = static function () use (&$counter): void {
            ++$counter;
        };

        $events->on('load', $callback1);
        $events->on('visit', $callback2);
        $events->on('load', $callback2);

        $events->off('load');

        $events->fire('load');
        $events->fire('visit');
        $events->fire('load');

        self::assertSame(1, $counter);
    }
}
