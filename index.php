<?php

include 'silverjack.php';

    /* This returns an associative array with the first index as the name of the picture, and second with the name associated with the picture */
function getPlayerArray(){
    return array("Chang.jpg"=>"Chang", "Heath.jpg"=>"Heath", "Jeff.jpg"=>"Jeff", "Tupac.jpg"=>"Tupac");
}

function printer() {
    $myDeck = new deck();
    $myDeck->getDeck();
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
                <?=printer()?>
            </div>
        </main>
    </body>
</html>