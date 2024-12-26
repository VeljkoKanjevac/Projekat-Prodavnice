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
    <form action="searchByType.php" method="get">
        <select name="type" class="form-select" aria-label="Default select example">
            <option value="Hrana">Hrana</option>
            <option value="Pice">Pice</option>
            <option value="Alat">Alat</option>
            <option value="Garderoba">Garderoba</option>
            <option value="Hemija">Hemija</option>
            <option value="Kucni ljubimci">Kucni ljubimci</option>
        </select>
        <br>
        <button class="col-12">Pretrazi</button>
    </form>
    </div>

</body>

</html>