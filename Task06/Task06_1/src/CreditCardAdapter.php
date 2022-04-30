<?php

namespace Rmvit\Task06_1;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private $adaptee;

    public function __construct(CreditCard $adaptee)
    {
        $this -> adaptee = $adaptee;
    }

    public function collectMoney($amount)
    {
        return $this -> adaptee -> authorizeTransaction();
    }
}
