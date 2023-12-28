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

namespace Hitechnix\Support\Handlers;

use Illuminate\Contracts\Container\Container;

class EventHandler
{
    /**
     * The container instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * Dispatch after all db transactions are committed.
     *
     * @var bool|null
     */
    public $afterCommit;

    /**
     * Constructor.
     *
     * @param Container $app
     *
     * @return void
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Dynamically retrieve objects from the container.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->app[$key];
    }
}
