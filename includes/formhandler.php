<?php 

$nome = $_POST["nome"];
$nomenclatura = $_POST["nomenclatura"];
$posicao = $_POST["posicao"];
$quantidade = $_POST["quantidade"];
$img = $_POST["img"];

require_once "db.php";

try {

    $sql = "INSERT INTO material (nome, nomenclatura, posicao, quantidade, img) VALUES ('$nome' , '$nomenclatura', '$posicao', '$quantidade', '$img');";

    $conn->exec($sql);

    echo "Nomenclatura adicionada na Base de Dados";

    header("Location: ../add.php");
    
}
 catch (PDOException $e){
    echo $sql . $e->getMessage();
 }
$conn = null;