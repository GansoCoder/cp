<?php
require("includes/db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Nome</th>
            <th>Nomenclatura</th>
            <th>Posicao</th>
            <th>Quantidade</th>
        </thead>
        <tbody>
    <?php 
        $query = "SELECT * FROM material";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();

        if($result){
            foreach($result as $row){

                ?>
                <tr>
                    <td><?= $row['nome']?></td>
                    <td><?= $row['nomenclatura']?></td>
                    <td><?= $row['posicao']?></td>
                    <td><?= $row['quantidade']?></td>
                </tr>
                <?php
            }
        }
        else {
            echo "nada aqui boi.";
        }
    ?>
        </tbody>
    </table>
</body>
</html>