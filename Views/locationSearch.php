<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    
    <?php require_once "index.php"; ?>

    <div class="container mt-3 col-6">
        <form action="searchByLocation.php" method="get">
            <label class="col-12" for="city">Unesite grad za pretragu</label><br><br>
            <input class="col-12" type="text" name="city" placeholder="Unesite grad"><br><br>
            <button class="col-12">Pretrazi</button>
        </form>
    </div>

</body>

</html>