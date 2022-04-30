<?php

namespace Rmvit\Task06_1;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $adaptee;

    public function __construct(PayPal $adaptee)
    {
        $this -> adaptee = $adaptee;
    }

    public function collectMoney($amount)
    {
        return $this -> adaptee -> transfer();
    }
}
