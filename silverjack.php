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
    private $suits = [];
    private $cards = [];
    
    public function __construct() {
        for($i = 0; $i < 4; $i++) {
            for($y = 0; $y < 13; $y++) {
                $this->cards[] = new card($i, $y);
                
            }
        }
        array_push($this->suits, 'clubs', 'diamonds', 'hearts', 'spades');
    }
    
    public function getDeck() {
        echo('<table>');
        foreach($this->cards as $card) {
            echo($card->getSuit());
            echo('<tr><img id="statImage" src="./img/cards/');
            echo($suits[$card->getSuit()]);
            echo('/'.($card->getCost()+1).'.png" id="" ></img>');
            echo('</tr>');
        }
        echo('</table>');
        
    }
}



?>