<?php

include 'silverjack.php';



    /* This returns an associative array with the first index as the name of the picture, and second with the name associated with the picture */
function getPlayerArray(){
    return (array("Chang", "Heath", "Jeff", "Tupac"));
}

function playSilverjack() {
    $myDeck = new deck();
    $myDeck->shuffler();
    $playerArray = getPlayerArray();
    echo('<table>');
    $winner = "";
    $winnerD = 0;
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
        echo('</tr>');
        
    }
    echo('<tr><td colspan="100%">'.$winner.' wins '.$winnerD.' points!</td></tr>');
    echo('<tr><td colspan="100%"><a href="./index.php">Play Again</a></td></tr>');
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
            <h1 style="color=rgb(220,110,0);" id="title">Silverjack Game</h1>    
        </header>
        <nav>
                <a href="../index.html">Main Page</a>
        </nav>
        <main>
            <div>
                <?=playSilverjack()?>
            </div>
        </main>
    </body>
</html>