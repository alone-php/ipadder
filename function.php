<?php

use AlonePhp\IpAdder\CzHelper;

/**
 * 通过ip获取地址
 * @param string $ip
 * @return string
 */
function alone_ipv4_address(string $ip): string {
    return CzHelper::getAdder($ip);
}