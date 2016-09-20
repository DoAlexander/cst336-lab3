<?php

class card {
    private $suit;
    private $cost;
    
    function __construct($fsuit, $fcost) {
        $this->suit = $fsuit;
        $this->cost = $fcost;
    }
    
    function getSuit() {
        return $this->suit;
    }
    
    function getCost() {
        return $this->cost;
    }
    
}

class deck {
    private $cards = [];
    
    function __construct() {
        for($i = 0; $i < 4; $i++) {
            for($y = 0; $y < 13; $y++) {
                $this->cards[] = new card($i, $y);
                
            }
        }
    }
    
    function getDeck() {
        foreach($this->cards as $card) {
            echo($card->getSuit());
        }
        
    }
}



?>