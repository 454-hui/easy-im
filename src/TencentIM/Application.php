<?php

namespace EasyIM\TencentIM;

use EasyIM\Kernel\ServiceContainer;
use EasyIM\TencentIM\Kernel\Providers\SignatureProvider;

/**
 * Class Application.
 *
 * @author  yingzhan <519203699@qq.com>
 *
 * @property \EasyIM\TencentIM\Group\Client                       $group
 * @property \EasyIM\TencentIM\Operate\Client                     $operate
 * @property \EasyIM\TencentIM\Speak\Client                       $speak
 * @property \EasyIM\TencentIM\Profile\Client                     $profile
 * @property \EasyIM\TencentIM\Account\Client                     $account
 * @property \EasyIM\TencentIM\SingleChat\Client                  $singleChat
 * @property \EasyIM\TencentIM\Sns\Client                         $sns
 * @property \EasyIM\TencentIM\Kernel\Providers\SignatureProvider $signatureProvider
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        SignatureProvider::class,
        Operate\ServiceProvider::class,
        Speak\ServiceProvider::class,
        Profile\ServiceProvider::class,
        Account\ServiceProvider::class,
        SingleChat\ServiceProvider::class,
        Sns\ServiceProvider::class,
        Group\ServiceProvider::class,
    ];
}
