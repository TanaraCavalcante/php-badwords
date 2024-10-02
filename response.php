<?php
//valore in text
$paragraph = $_GET["text"];

//valore in badword
$word = $_GET["badword"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>response php</title>
</head>
<body>
    <main class="container">
        <section>
            <h3>L'utente ha scritto: </h3>
            <p> " <?php echo $paragraph ?> " </p>
            <h3> La lunghezza del paragraph è: </h3> 
           <p>
            <?php echo strlen($paragraph); ?>
         </p>
        </section>
       

    </main>
</body>
</html>