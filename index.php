<?php

include 'silverjack.php';



    /* This returns an associative array with the first index as the name of the picture, and second with the name associated with the picture */
function getPlayerArray(){
    return array("Chang", "Heath", "Jeff", "Tupac");
}

function playSilverjack() {
    $myDeck = new deck();
    
    $playerArray = getPlayerArray();
    echo('<table>');
    for($i = 0; $i < 4; $i++) {
        echo('<tr>');
        echo('<td>'.'<img src="./img/players/'.$playerArray[$i].'.jpg" ></img><br>'.$playerArray[$i].'<td>');
        //Add in card dealing here
        echo('</tr>');
        
    }
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