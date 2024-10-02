<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="mb-5">
        <h2>Badwords</h2>
    </header>
    <main class="container">
        <form action="./response.php" method="get">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Write the text</label>
                <input type="email" class="form-control" id="paragraph" >
            </div>
            <div class="mb-3">
                <label for="word" class="form-label">Badword</label>
                <textarea class="form-control" id="word" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </main>


</body>
</html>