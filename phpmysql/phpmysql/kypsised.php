<?php

//setcookie("nimi", "Mario", time()+3600);

//session_start();
  //  $_SESSION['nimi'] = "Rain";
    //print_r($_SESSION['nimi']);


    $pw = "admin123";

    $hash = password_hash($pw, PASSWORD_DEFAULT);
    print_r($hash);

    if(password_verify("admin123", $hash)){
       // echo "ok";
    } else {
        echo "kõik on valesti";
    }
    
?>