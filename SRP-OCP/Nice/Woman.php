<?php

class Woman extends Person_nice {

    public $measures;

    function __construct($measures) {
        $this->measures = $measures;
    }

    
    // Cumple OCP porque esta abierto a extension y cerrado a modificacion
    // Extension seria una nueva clase Man, 
    // y esta cerrado a modificacion porque esta clase ya no se toca (no hay un if...)
    public function getOutfit(){
        return "Red T-shirt";
    }

}
