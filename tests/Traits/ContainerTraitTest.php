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
use Hitechnix\Support\Traits\ContainerTrait;

class ContainerTraitTest extends TestCase
{
    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }

    /** @test */
    public function it_can_set_and_retrieve_the_container()
    {
        $containerTrait = new ContainerTraitStub();

        $container = m::mock('Illuminate\Contracts\Container\Container');

        $containerTrait->setContainer($container);

        $this->assertSame($containerTrait->getContainer(), $container);
    }
}

class ContainerTraitStub
{
    use ContainerTrait;
}
