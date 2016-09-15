<?php

include 'LEDBoard/ledLetters.php';

function LED($letter){
    drawLetter($letter,"blue");
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
            <div class="LED">
                <?=LED("C")?>
                <?=LED("C")?>
            </div>
            <div class="LED">
                <?=LED("C")?>
            </div>
        </main>
        <footer>
            &copy; Alexander, 2016. <br />
            Disclaimer: The information on this page might not be accurate. It's used for academic purposes. <br />
            <img src="./img/csumb-logo.png" alt="CSUMB Logo" />
        </footer>
    </body>
</html>