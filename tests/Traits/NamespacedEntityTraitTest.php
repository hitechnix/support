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
use Hitechnix\Support\Traits\NamespacedEntityTrait;
use Hitechnix\Support\Contracts\NamespacedEntityInterface;

class NamespacedEntityTraitTest extends TestCase
{
    /** @test */
    public function it_can_get_and_set_the_entity_namespace()
    {
        $entity = new NamespacedEntityTraitStub();

        $this->assertSame('Hitechnix\Support\Tests\Traits\NamespacedEntityTraitStub', $entity->getEntityNamespace());

        $entity->setEntityNamespace('Foo\Bar');

        $this->assertSame('Foo\Bar', $entity->getEntityNamespace());
    }
}

class NamespacedEntityTraitStub implements NamespacedEntityInterface
{
    use NamespacedEntityTrait;

    protected static $entityNamespace;
}
