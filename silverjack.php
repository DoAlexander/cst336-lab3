<?php

class card {
    private $suit;
    private $cost;
    
    function __construct($fsuit, $fcost) {
        $this->suit = $fsuit;
        $this->cost = $fcost;
    }
    
    function getSuit() {
        return $suit;
    }
    
    function getCost() {
        return $cost;
    }
    
}

class deck {
    private $cards;
    
    function __construct() {
        for($i = 0; $i < 4; $i++) {
            for($y = 0; $y < 13; $y++) {
                $temp = new card($i, $y);
            }
        }
    }
    
    function getDeck() {
        print_r($cards);
    }
}



?>