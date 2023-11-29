<?php 
    include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Inicio</title>
</head>
<body>
    <nav>
        <form action="includes/search.php" method="POST">
            <input type="text" class="search" name="search" id="search" placeholder="Material...">
            <input type="submit" value="Procurar">
        </form>
    </nav>
    <div>
    
       <div class="container">

            <?php 
            $query = "SELECT * FROM material";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll();

            if ($result) {
                foreach ($result as $row) {
               ?> 
                <div class="card">
                <div class="card-head">
                    <img src="<?= $row['img']?>" alt="<?= $row['img']?>">
                </div>
                <div class="card-body">
                <p>Nome</p>
                <small><?= $row['nome']?></small>
                <p>Nomenclatura</p>
                <small><?= $row['nomenclatura'] ?></small>
                <p>Posição</p>
                <small><?= $row['posicao'] ?></small>
                <p>Quantidade</p>
                <small><?= $row['quantidade'] ?></small>
            </div>
        </div>
                <?php
                }
            }

            ?>
    
    </div> 
</div>
</body>
</html>
