<?php
$kasutaja = "Tihkel";
$dbserver = "localhost";
$andmebaas ="kellapood";
$passwd = "Passw0rd";

$yhendus = mysqli_connect ($dbserver, $kasutaja, $passwd, $andmebaas);

if (!$yhendus) {
    die("Viga: " . $yhendus->connect_error);
}
?>