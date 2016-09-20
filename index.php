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
        <title> Doug's Lab 2 </title>
        <meta charset="utf-8">
        <link href="./css/generic.css" rel="stylesheet">
    </head>
    <body background="./img/happy-otter.png">
        <header>
            <h1 style="color=rgb(220,110,0);" id="title">LED Board</h1>    
        </header>
        <nav>
                <a href="../index.html">Main Page</a>
        </nav>
        <main>
            <div>
                <?=printer()?>
            </div>
        </main>
        <footer>
            &copy; Alexander, 2016. <br />
            Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br />
            <img src="./img/csumb-logo.png" alt="CSUMB Logo" />
        </footer>
    </body>
</html>