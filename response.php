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
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="container my-3">
        <section class="mb-4">
            <h3>L'utente ha scritto: </h3>
            <p> " <?php echo $paragraph ?> " </p>
            <h3> La lunghezza del paragraph è: </h3> 
            <p><?php echo strlen($paragraph); ?></p>
        </section>
        <hr>
        <section>
            <h3>Paragraph senza la "Badword": </h3>
            <p>
               "<?php 
                 $badword = str_ireplace( $word , "***", $paragraph); 
                 echo $badword;
                ?> " 
             </p>
        </section>
       

    </main>
</body>
</html>