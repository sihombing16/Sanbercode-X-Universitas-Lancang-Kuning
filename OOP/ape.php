<?php

require_once ('ape.php');

class ape {
    public $Name = "kera sakti";
    public $legs = 2;
    public $cold_blooded = "no";
    public $Yell = "Auooo";
   
    public function __construct($string) {
        $this->Name=$string;
    }
}


?>