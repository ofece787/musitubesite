<?php 
    $pasta = 'musicas';

    if(isset($_GET['file']) && file_exists("{$pasta}/".$_GET['file'])){
        $file = $_GET['file'];
        $type = filetype("{$pasta}/{$file}");
        $size = filesize("{$pasta}/{$file}");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        readfile("{$pasta}/{$file}");

        exit;

    }

?>