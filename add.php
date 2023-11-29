<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Adicionar</title>
</head>
<body>
   <div>
    <form action="includes/formhandler.php" method="POST" class="form-style">
        <input type="text" placeholder="Nomenclatura" name="nomenclatura" id="">
        <input type="text" placeholder="Nome" name="nome" id="nome">
        <input type="text" placeholder="Posicao" name="posicao" id="posicao">
        <input type="number" placeholder="Quantidade" name="quantidade" id="quantidade">
        <input type="text" placeholder="Img" name="img" id="img">
        <input type="submit" name="confirmar" id="confirmar">
    </form>
   <a href="index.php">Voltar ao inicio.</a>
   </div> 
</body>
</html>