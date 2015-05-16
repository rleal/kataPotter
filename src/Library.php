<?php
namespace rleal\KataPotter;

use rleal\KataPotter\Cart;

class Library {
    public function pay(Cart $cart){
        return $cart->getContent()[1] * 8;
    }
}