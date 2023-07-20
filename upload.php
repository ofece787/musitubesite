<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicado</title>
    <link rel="stylesheet" href="formula.php">
</head>
<body>
    
</body>
</html>

<?php

    include('conexao.php');
    $pasta= 'musicas';
    if(isset($_POST['sub'])){

        $file = $_FILES['amusica'];
        $names = $file['name'];
        $tmp_name = $file['tmp_name'];
        $nartista = $_POST['nartista'];
        $tmusica = $_POST['tmusica'];

    }

    $sql = "INSERT INTO musicas (nome, titulo) VALUES ('$nartista', '$tmusica')";
    $sqlres = mysqli_query($mysql, $sql);


    foreach($names as $index => $name){
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        $newName = $nartista.' - '.$tmusica.'.'.$extension;

        if ($extension != 'mp3') {
            die('upload negado');
        }

        else{

            move_uploaded_file($tmp_name[$index],'musicas/'.$newName);
            echo('<p>Publicação feita com sucesso</p>');

            exit;
    
        }

    }
?>
