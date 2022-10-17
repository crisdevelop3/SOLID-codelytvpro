<?php

class Bird implements Animals {
    //Bad


    public function fly(){
        echo "Bird can fly";
    }
    public function run(){

    }
    public function bark(){

    }

    //NO CUMPLE ISP!!!
    //Implementa una interfaz de la cual tiene funciones que no va a usar. 

}
