<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:20
 */

namespace Factories;

use Libs\PaymentSystems\ApplePayGateway;
use Libs\PaymentSystems\PayPalGateway;
use Libs\PaymentSystems\StripeGateway;

class PaymentSystemGatewayFactory
{
    private const METHODS = [
        'paypal' => PayPalGateway::class,
        'apple-pay' => ApplePayGateway::class,
        'stripe' => StripeGateway::class,
    ];

    public function make(string $system)
    {
        try {
            return new (self::METHODS[$system]);
        } catch (\Throwable $e) {
            throw new \InvalidArgumentException('Invalid payment system provided');
        }
    }
}
