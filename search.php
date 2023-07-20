<?php 
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    
    <div class="principal">
        <?php
            if(isset($_POST['pesquisar'])){
                $pesquisa = $_POST['procurar'];
        
                $sql = "SELECT * FROM musicas where nome like '%$pesquisa%' or titulo like '%$pesquisa%'";
                $sqlres = mysqli_query($mysql, $sql);
        
                while($row = mysqli_fetch_assoc($sqlres)){
        
                    echo "
                    <a href=\"tocar.php?data=".$row['nome'].' - '.$row['titulo'].".mp3\">"."
                    <div class=\"caixa\">".$row['nome'].' - '.$row['titulo']."</div></a>";
                }
        
            }
        ?>
    </div>
</body>
</html>

