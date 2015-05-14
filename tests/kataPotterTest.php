<?php

require_once "src/Library.php";

class KataPotterTest extends PHPUnit_Framework_TestCase {

    public function test_WhenBuyOneBook_Then8() {
        $cart = new Cart();
        $cart->add(1, 1);
        $this->assertEquals(8, (new Library())->pay($cart));
    }

}
