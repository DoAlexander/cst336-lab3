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
                $this->cards[] = new card($this->suits[$i], $y);
                
            }
        }
    }
    
    public function shuffler() {
        shuffle($this->cards);
    }
    
    public function dealCard() {
        return array_pop($this->cards);
    }
    
    public function getDeck() {
        echo('<table>');
        for($i = 0; $i < sizeof($this->cards); $i++) {
            echo('<tr><td><img src="./img/cards/'. $this->cards[$i]->getSuit().'/'.($this->cards[$i]->getCost()+1).'.png" ></img></td></tr>');
        }
        /*foreach($this->cards as $card) {
            echo('<tr><img src="./img/cards/'.$this->suits[$card->getSuit()].'/'.($card->getCost()+1).'.png" id="" ></img></tr>');
        }*/
        echo('</table>');
        
    }
}



?>