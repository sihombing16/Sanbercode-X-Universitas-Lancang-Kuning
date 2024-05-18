<?php
    require_once ('animal.php');
    require_once ('frog.php');
    require_once ('ape.php');

    $sheep = new animal('shaun');
    echo "Name : " . $sheep->Name . "<br>";
    echo "legs : " . $sheep->legs . "<br>";
    echo "cold_blooded : " . $sheep->cold_blooded . "<br> <br>";
    

    $kodok = new frog('buduk');
    echo "Name : " . $kodok->Name . "<br>";
    echo "legs : " . $kodok->legs . "<br>";
    echo "cold_blooded : " . $kodok->cold_blooded . "<br>";
    echo "Jump : " . $kodok->Jump . "<br> <br>";

    $sungokong = new ape('kera sakti');
    echo "Name : " . $sungokong->Name . "<br>";
    echo "legs : " . $sungokong->legs . "<br>";
    echo "cold_blooded : " . $sungokong->cold_blooded . "<br>";
    echo "Yell : " . $sungokong->Yell . "<br> <br>";

?>