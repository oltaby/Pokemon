<?php
require 'storage.php';
$jsonIO = new JsonIO('cards.json');
$storage = new Storage($jsonIO);
$cards = $storage->findAll();
$id = $_GET['id'] ?? null;
$card = $cards[$id] ?? null;


if (!$card) {
    die("Card not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title><?= htmlspecialchars($card['name']) ?> - Details</title>
</head>
<body>
    <div class="full-width-corner blue"></div>
    <div class="full-width-corner2 blue"></div>
    <a href="index.php">
    <img src="pictures/logo.png" alt="Logo" class="logo">
    </a>

    <button class="button-style2">Login</button>
    <button class="button-style1">Register</button>
    <p class ="des"><?= htmlspecialchars($card['description']) ?></p>

    <div class="cards-container2">
        
        <?php
            switch($card['type']) {
        case 'fire':
            $additionalClass = 'fire-card';
            break;
        case 'electric':
            $additionalClass = 'electric-card';
            break;
        case 'bug':
            $additionalClass = 'bug-card';
            break;
        case 'water':
            $additionalClass = 'water-card';
            break;    
        case 'poison':
            $additionalClass = 'poison-card';
            break;    
        case 'grass':
            $additionalClass = 'grass-card';
            break;  
        case 'normal':
            $additionalClass = 'normal-card';
            break;  
        default:
            $additionalClass = '';
            break;
        }
        ?>



        <div class="card <?= $additionalClass ?>">
            <img src="<?= htmlspecialchars($card['image']) ?>" alt="<?= htmlspecialchars($card['name']) ?>">
            <div class="card-info">
            <h2 class="card-title"><?= htmlspecialchars($card['name']) ?></h2>
            <h3 class="card-type"><?= htmlspecialchars($card['type']) ?></h3>
            <h3 class="card-stats"> 
            <img src="pictures/hp.png" class="iconS" alt="$"/> 
            <?= htmlspecialchars($card['hp']) ." " ?>
            <img src="pictures/sword.png" class="iconS" alt="$"/>   
            <?= htmlspecialchars($card['attack']) ." " ?>
            <img src="pictures/defence.png" class="iconS" alt="$"/>   
            <?= htmlspecialchars($card['defense'])?> </h3>
            <h3> </h3>
            <h3 class="card-price"><img src="pictures/price.png" class="icon" alt="$"/> <?= htmlspecialchars($card['price']) ?> </h3>                
        </div>
    </div>    
</body>
</html>
