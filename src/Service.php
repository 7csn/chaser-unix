<?php

declare(strict_types=1);

namespace chaser\unix;

use chaser\stream\interfaces\part\ServiceInterface;

/**
 * unix 服务特征
 *
 * @package chaser\unix
 *
 * @see ServiceInterface
 */
trait Service
{
    /**
     * @inheritDoc
     */
    public static function transport(): string
    {
        return 'unix';
    }
}
