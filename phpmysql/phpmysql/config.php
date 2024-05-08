<?php

$kasutaja = "kadri";
$dbserver = "localhost";
$andmebaas ="muusikapood";
$pw = "parool";

$yhendus = mysqli_connect ($dbserver, $kasutaja, $pw, $andmebaas);

if (!$yhendus) {
    die ("Sa jälle ebaõnnestusid!");
} 

?>