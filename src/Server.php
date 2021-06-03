<?php

declare(strict_types=1);

namespace chaser\unix;

use chaser\stream\ConnectedServer;

/**
 * unix 服务器类
 *
 * @package chaser\unix
 */
class Server extends ConnectedServer
{
    use Service;

    /**
     * 初始化公共部分信息
     */
    protected function initCommon(): void
    {
        parent::initCommon();

        $this->makeTargetFile();
    }

    /**
     * 创建监听文件（若不存在）
     */
    protected function makeTargetFile(): void
    {
        if (!is_file($this->target)) {
            $dir = dirname($this->target);
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
            touch($this->target);
        }
    }
}
