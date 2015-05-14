<?php

require_once "src/Library.php";

class KataPotterTest extends PHPUnit_Framework_TestCase {

    public function test_WhenBuyOneBook_Then8() {
        $cart = new Cart();
        $cart->add(1, 1);
        $this->assertEquals(8, (new Library())->pay($cart));
    }

    public function test_WhenBuyTwoBooksEquals_Then16() {
        $cart = new Cart();
        $cart->add(1, 2);
        $this->assertEquals(16, (new Library())->pay($cart));
    }

}
