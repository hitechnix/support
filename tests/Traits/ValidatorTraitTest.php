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
use Hitechnix\Support\Traits\ValidatorTrait;

class ValidatorTraitTest extends TestCase
{
    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        m::close();
    }

    /** @test */
    public function it_can_set_and_retrieve_the_validator_instance()
    {
        $validator = new ValidatorTraitStub();

        $mailer = m::mock('Hitechnix\Support\Validator');

        $validator->setValidator($mailer);

        $this->assertSame($validator->getValidator(), $mailer);
    }
}

class ValidatorTraitStub
{
    use ValidatorTrait;
}
