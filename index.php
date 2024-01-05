<?php

$jsonString = file_get_contents('cards.json');
$data = json_decode($jsonString, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Pokémons NFTs</title>
</head>

<div>
</div>

<div class="full-width-corner blue"></div>
<div class="full-width-corner2 blue"></div>
<a href="index.php">
    <img src="pictures/logo.png" alt="Logo" class="logo">
</a>


<button class="button-style2">Login</button>
<button class="button-style1">Register</button>

<div class="cards-container">
        <?php foreach($data as $key => $card): ?>
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
                    <a href="item.php?id=<?= urlencode($key) ?>" class="card-link">
                    <h2 class="card-title"><?= htmlspecialchars($card['name']) ?></h2></a>
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
        <?php endforeach; ?>
    </div>


<!-- <form action="login.php" method="post">
            Username: <input type="text" name="un"> <br>
            Password: <input type="password" name="pw"> <br>
            <button type="submit">Login</button>
        </form> -->

        </body>
</html>