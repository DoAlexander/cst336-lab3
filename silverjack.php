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
    private $suits = array('clubs', 'diamonds', 'hearts', 'spades');
    private $cards = [];
    
    public function __construct() {
        for($i = 0; $i < 4; $i++) {
            for($y = 0; $y < 13; $y++) {
                $this->cards[] = new card($i, $y);
                
            }
        }
    }
    
    public function getDeck() {
        echo('<table>');
        foreach($this->cards as $card) {
            echo('<tr><img src="./img/cards/'.$this->suits[$card->getSuit()].'/'.($card->getCost()+1).'.png" id="" ></img></tr>');
        }
        echo('</table>');
        
    }
}



?>