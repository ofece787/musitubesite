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
    <link rel="stylesheet" href="css/ppagina.php">
</head>
<body>
    
    <div class="sidebar">
        <button class="menubotao">
            <div class="menu">
            </div>
        </button>
        
    </div>
        
    
    <div class="topbar">
            
        <div class="formulario">
            <form action="search.php" method="post">
                <input type="search" name="procurar" id="campo" required>
                <input type="submit" value="Procurar" name="pesquisar" id="botao">
            </form>
        </div>

        <a href="formularioup.php">
            <p class="admin">Admin</p>
        </a>
    </div>


    <div class="principal">
        <?php 
            $pasta = 'musicas';
            
            foreach(glob("$pasta/*.*") as $musicas){
                $musica = basename($musicas);
                    $newName = explode('.', $musica);
                    
                    echo "<a href=\"tocar.php?data=".$musica.
                    "\">
                        <div class=\"caixa\"> 
                            <div class=\"cartao\">
                                <div class=\"disco\">
                                    <div class=\"discoint\">
                                        <div class=\"pontoin\">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href=\"tocar.php?data=".$musica."\">
                                        <div class=\"play\">
                                            <div class=\"play-btn\">
                                            </div>
                                        </div>
                                    </a>
                                    <a href=\"baixar.php?file=".$musica."\">
                                        <div class=\"down\">
                                            <div class=\"down-btn\">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>".$newName[0]."</div>
                        </div>

                    </a>";

            }
        ?>
    </div>
    
</body>
</html>