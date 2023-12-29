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

use PHPUnit\Framework\TestCase;
use Hitechnix\Support\Traits\RepositoryTrait;

class RepositoryTraitTest extends TestCase
{
    /** @test */
    public function it_can_set_and_retrieve_the_model()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('FooModelStub');

        $this->assertSame('FooModelStub', $repository->getModel());
    }

    /** @test */
    public function it_can_create_a_model()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('StdClass');

        $this->assertInstanceOf('StdClass', $repository->createModel());
    }

    /** @test */
    public function it_can_call_dynamic_methods()
    {
        $repository = new RepositoryTraitStub();

        $repository->setModel('Hitechnix\Support\Tests\Traits\FooModelStub');

        $this->assertSame('Hitechnix\Support\Tests\Traits\FooModelStub', $repository->getModel());

        $this->assertSame('bar', $repository->foo());
    }
}

class RepositoryTraitStub
{
    use RepositoryTrait;

    public $model;
}

class FooModelStub
{
    public function foo()
    {
        return 'bar';
    }
}
