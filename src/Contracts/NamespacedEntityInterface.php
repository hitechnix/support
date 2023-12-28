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

namespace Hitechnix\Support\Contracts;

interface NamespacedEntityInterface
{
    /**
     * Returns the entity namespace.
     *
     * @return string
     */
    public static function getEntityNamespace(): string;

    /**
     * Sets the entity namespace.
     *
     * @param string $namespace
     *
     * @return void
     */
    public static function setEntityNamespace(string $namespace): void;
}
