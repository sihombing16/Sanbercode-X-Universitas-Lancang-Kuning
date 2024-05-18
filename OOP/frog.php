<?php

require_once ('frog.php');

class frog {
    public $Name = "budok";
    public $legs = 4;
    public $cold_blooded = "no";
    public $Jump = "Hop Hop";

    public function __construct($string) {
        $this->Name=$string;
    }
}


?>