<?php
/*
 * Hi-Technix, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the 3-clause BSD license that is
 * available through the world-wide-web at this URL:
 * https://opensource.hitechnix.com/LICENSE.txt
 *
 * @author          Hi-Technix, Inc.
 * @copyright       Copyright (c) 2023 Hi-Technix, Inc.
 * @link            https://opensource.hitechnix.com
 */

namespace Hitechnix\Support\Tests\Traits;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Hitechnix\Support\Traits\EventTrait;

class EventTraitTest extends TestCase
{
    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }

    /** @test */
    public function it_can_set_and_retrieve_the_dispatcher()
    {
        $eventTrait = new EventTraitStub();

        $dispatcher = m::mock('Illuminate\Contracts\Events\Dispatcher');

        $eventTrait->setDispatcher($dispatcher);

        $this->assertSame($eventTrait->getDispatcher(), $dispatcher);
    }

    /** @test */
    public function it_can_set_and_retrieve_the_dispatcher_status()
    {
        $eventTrait = new EventTraitStub();

        $dispatcher = m::mock('Illuminate\Contracts\Events\Dispatcher');

        $method = method_exists($dispatcher, 'fire') ? 'fire' : 'dispatch';
        $dispatcher->shouldReceive($method)->once();

        $eventTrait->setDispatcher($dispatcher);

        $eventTrait->disableDispatcher();

        $this->assertFalse($eventTrait->getDispatcherStatus());

        $eventTrait->testEvent();

        $eventTrait->enableDispatcher();

        $this->assertTrue($eventTrait->getDispatcherStatus());

        $eventTrait->testEvent();
    }
}

class EventTraitStub
{
    use EventTrait;

    public function testEvent()
    {
        $this->fireEvent('test');
    }
}
