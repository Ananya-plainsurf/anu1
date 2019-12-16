<?php
//include 'index.php';
require'./vendor/autoload.php';
include_once './index.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function get_dir($dir) {

            $dh = new DirectoryIterator($dir);
            // Dirctary object 
            
                $file_ext = pathinfo($dh, PATHINFO_EXTENSION);
                foreach ($dh as $item) {
                            $Parsedown = new Parsedown();
                            $file = fopen($item);
                            echo $parsedown->text(fread($item));
                            echo "<br>";
                            echo "</li>";
                     
                }
            
        }

//$html = file_get_contents($item);
        $Parsedown = new Parsedown();
        $file = fopen($dir);
        echo $parsedown->text(fread($file, filesize($dir)));
//echo $Parsedown->text($html);
        ?>
    </body>
</html>
