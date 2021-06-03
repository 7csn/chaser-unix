<?php

declare(strict_types=1);

namespace chaser\unix;

use chaser\stream\ConnectClient;

/**
 * unix 客户端类
 *
 * @package chaser\unix
 */
class Client extends ConnectClient
{
    use Service;
}
