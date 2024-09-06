<?php

$filename = 'data.txt';

if (file_exists($filename)) {

    $content = file_get_contents($filename);
    echo "File Contents:\n";
    echo $content;
    

    $lines = file($filename);
    echo "\n\nFile Read Line by Line:\n";
    foreach ($lines as $line) {
        echo $line;
    }
} else {

    $content = "Sample data for data.txt file.\nThis file was created using file_put_contents().";
    file_put_contents($filename, $content);
    echo "File '$filename' has been created with the following content:\n";
    echo $content;
}
?>