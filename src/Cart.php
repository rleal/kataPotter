<?php
namespace rleal\KataPotter;

class Cart {
    protected $content = array();

    public function add($book, $q) {
        if (array_key_exists($book, $this->content)) {
            $this->content[$book] += $q;
        } else{
            $this->content[$book] = $q;
        }
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return $this->content;
    }


}