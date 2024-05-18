<?php

require_once ('animal.php');

class animal {
    public $Name = "shaun";
    public $legs = 4;
    public $cold_blooded = "no";
   
    public function __construct($string) {
        $this->name=$string;
    }
}


?>