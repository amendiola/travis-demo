<?php

namespace App\Demo;

class Concat {

    private $name;
    private $surname;

    function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function toString(){
        return $this->name . " " . $this->surname;
    }
    
}


