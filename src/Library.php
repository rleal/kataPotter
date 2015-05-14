<?php

require_once 'src/Cart.php';

class Library {
    public function pay(Cart $cart){
        return $cart->getContent()[1] * 8;
    }
}