<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    


    <?php 
        $ficheiro = $_GET['data'];

        echo "<audio controls autoplay src=\"musicas/".$ficheiro."\"></audio>";
    ?>
</body>
</html>