<?php

namespace Tests\Unit;

use App\Services\OrderService;
use PHPUnit\Framework\TestCase;

class PriceCalculationTest extends TestCase
{
    public function test_final_price_is_calculated_correctly_shipping_gls_payment_cash()
    {
        $price = 25;
        $shipping = 'gls';
        $payment = 'cash';

        $orderService = new OrderService();
        $finalPrice = $orderService->calculatePrice($price, $shipping, $payment);

        $this->assertEquals(30, $finalPrice);
    }

    public function test_final_price_is_calculated_correctly_shipping_packeta_payment_card()
    {
        $price = 25;
        $shipping = 'packeta-dobierka';
        $payment = 'card';

        $orderService = new OrderService();
        $finalPrice = $orderService->calculatePrice($price, $shipping, $payment);

        $this->assertEquals(28.3, $finalPrice);
    }

    public function test_final_price_is_calculated_correctly_shipping_packeta_payment_cash()
    {
        $price = 25;
        $shipping = 'packeta-dobierka';
        $payment = 'cash';

        $orderService = new OrderService();
        $finalPrice = $orderService->calculatePrice($price, $shipping, $payment);

        $this->assertEquals(29.3, $finalPrice);
    }

    public function test_final_price_is_calculated_correctly_shipping_gls_payment_card()
    {
        $price = 25;
        $shipping = 'gls';
        $payment = 'card';

        $orderService = new OrderService();
        $finalPrice = $orderService->calculatePrice($price, $shipping, $payment);

        $this->assertEquals(29, $finalPrice);
    }


    public function test_invalid_payment_throws_an_exception()
    {
        $this->expectException(\Exception::class);

        $price = 25;
        $shipping = 'packeta-dobierka';
        $payment = 'pennies';

        $orderService = new OrderService();
        $orderService->calculatePrice($price, $shipping, $payment);

    }

    public function test_invalid_shipping_throws_an_exception()
    {
        $this->expectException(\Exception::class);

        $price = 25;
        $shipping = 'FedEx';
        $payment = 'cash';

        $orderService = new OrderService();
        $orderService->calculatePrice($price, $shipping, $payment);

    }
}
