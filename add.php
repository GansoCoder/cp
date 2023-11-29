<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <form action="includes/formhandler.inc.php" method="post">
    
        <input type="text" name="nomenclatura" id="nomenclatura" placeholder="Nomenclatura">
        <input type="text" name="posicao" id="posicao" placeholder="Posição">
        <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade">
        <input type="text" name="imagem" id="imagem" placeholder="Imagem">
        <input type="submit" name="confirm" id="confirm" value="Confirmar">
    </form>
</body>
</html>