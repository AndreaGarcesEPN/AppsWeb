<?php

$fp = fopen("prueba.txt","r");

while(!feof($fp)){
    $linea = fgets($fp);
    echo $linea;
}

fclose($fp);

?>