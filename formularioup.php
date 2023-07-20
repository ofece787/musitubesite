<?php 
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <div>
                <label for="">Nome do artista</label>
                <input type="text" name="nartista" id="" required>
            </div>
            <div>
                <label for="">Titulo da Musica</label>
                <input type="text" name="tmusica" id="" required>
            </div>
            <input type="file" name="amusica[]" id="" required>
        </div>

        <input type="submit" value="Enviar" name="sub">
    </form>

    
</body>
</html>