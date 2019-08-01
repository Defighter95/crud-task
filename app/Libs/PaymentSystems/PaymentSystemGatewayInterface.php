<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:27
 */

namespace Libs\PaymentSystems;

interface PaymentSystemGatewayInterface
{
    public function pay();
}
