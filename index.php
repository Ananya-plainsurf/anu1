<!DOCTYPE html>
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
    if (is_dir($dir)) {
        $file_ext = pathinfo($dh, PATHINFO_EXTENSION);
        foreach ($dh as $item) 
        {
            if (!$item->isDot()) 
            {
                if ($item->isDir()) 
                {
                    get_dir("$dir/$item");
                } 
                elseif ($file_ext == "md" ) 
                {

                    echo "<li>";
                    //echo $dir . "/" . $item->getFilename();
                    echo '<a href= "'.$dir . '/' . $item->getFilename().'">'.$dir .
                            "/" . $item->getFilename().'</a><br>';
                    echo "<br>";
                    echo "</li>";
                }
            }
        }
    }
}
get_dir("assignment/");
?>
    </body>
</html>
