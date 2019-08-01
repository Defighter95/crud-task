<?php
/**
 * Created by PhpStorm.
 * User: iliya
 * Date: 01.08.2019
 * Time: 21:32
 */

namespace Http\Controllers;

use App\Http\Controllers\Controller;
use Factories\PaymentSystemGatewayFactory;
use Http\Requests\CreatePaymentRequest;
use Libs\PaymentSystems\PaymentSystemGatewayInterface;

class PaymentController extends Controller
{
    public function store(CreatePaymentRequest $request, PaymentSystemGatewayFactory $paymentGatewayFactory)
    {
        /** @var PaymentSystemGatewayInterface $paymentGateway */
        $paymentGateway = $paymentGatewayFactory->make($request->get('system'));

        $paymentGateway->pay();
    }
}
