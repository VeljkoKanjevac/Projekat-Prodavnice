<?php

    require_once "../Models/Inputs.php";
    require_once "../Models/Store.php";

    $input = new Input($_GET);
    if(!$input -> checkInput())
    {
        die("Nisu prosledjena sva polja za unos.");
    }

    $type = $_GET["type"];
    
    $store = new Store();

    if(!$store->storeTypeExists($type))
    {
        die("Ne postoje prodavnice sa unetom vrstom proizvoda");
    }

    $stores = $store -> getStoreByType($type);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<?php require_once "index.php"; ?>

<div class="container col-10 mt-2 d-flex justify-content-evenly flex-wrap">
    <?php foreach($stores as $store): ?>

        <div class="card align-items-center mb-3" style="width:16rem;">
            <div class="card-body">
                <h5 class="card-title"> <?= $store["store_name"]; ?> </h5>
                <p class="card-text"> <?= $store["store_location"] ?> </p>
                <p class="card-text"> <?= $store["products_type"] ?> </p>
            </div>
        </div>    
                
    <?php endforeach; ?>
    </div>
    
</body>
</html>