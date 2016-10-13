<?php

include 'silverjack.php';



    /* This returns an associative array with the first index as the name of the picture, and second with the name associated with the picture */
function getPlayerArray(){
    $players = array("Chang", "Heath", "Jeff", "Tupac");
    shuffle($players);
    return $players;
}

function playSilverjack() {
    $myDeck = new deck();
    $myDeck->shuffler();
    $playerArray = getPlayerArray();
    shuffle($playerArray);
    echo('<table>');
    $winner = "";
    $winnerD = 0;
    $totalD = 0;
    for($i = 0; $i < 4; $i++) {
        $dealt = 0;
        echo('<tr>');
        echo('<td>'.'<img src="./img/players/'.$playerArray[$i].'.jpg" ></img><br>'.$playerArray[$i].'</td>');
        //Add in card dealing here
        while($dealt < 36) {
            $currCard = $myDeck->dealCard();
            echo('<td><img src="./img/cards/'.$currCard->getSuit().'/'.($currCard->getCost()+1).'.png" ></img></td>');
            $dealt += $currCard->getCost();
        }
        echo('<td>'.$dealt.'</td>');
        if($dealt <= 42 && $dealt > $winnerD) {
            $winner = $playerArray[$i];
            $winnerD = $dealt;
        }
        $totalD += $dealt;
        echo('</tr>');
        
    }
    echo('<tr><td colspan="75%">'.$winner.' wins '.($totalD-$winnerD).' points!</td></tr>');
    echo('<tr><td colspan="75%"><a href="./index.php">Play Again</a></td></tr>');
    echo('</table>');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Silverjack Game </title>
        <meta charset="utf-8">
        <link href="./css/generic.css" rel="stylesheet">
    </head>
    <body >
        <header>
            <h1 id="title">Silverjack Game</h1>  
            <h3 id="credit">by Doug, Erica, Tim</h3>
        </header>
        <nav>
                <a href="../cst336-lab3/index.php">Main Page</a>
                <a href="../cst336-lab3/credit.html">Credits</a>
        </nav>
        <main>
            <div>
                <?=playSilverjack()?>
            </div>
        </main>
    </body>
</html>