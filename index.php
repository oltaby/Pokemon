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
<img src="pictures/logo.png" alt="Logo" class="logo">

<button class="button-style2">Login</button>
<button class="button-style1">Register</button>


<div class="cards-container">
        <?php foreach($data as $card): ?>
            <div class="card">
                <img src="<?= htmlspecialchars($card['image']) ?>" alt="<?= htmlspecialchars($card['name']) ?>">
                <div class="card-info">
                    <h2 class="card-title"><?= htmlspecialchars($card['name']) ?></h2>
                    <h3 class="card-type"><?= htmlspecialchars($card['type']) ?></h3>
                    <h3 class="card-stats"><?= htmlspecialchars($card['hp']) ." ". htmlspecialchars($card['attack']) ." ". htmlspecialchars($card['defense'])?></h3>
                    <h3> </h3>
                    <h3 class="card-price"><?= htmlspecialchars($card['price']) ?></h3> 
                    <!-- Display types, stats, etc. here -->
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