<?php

class Dog implements Animals {
    //Bad


    public function fly(){

    }
    public function run(){
        echo "Dog can run!";
    }
    public function bark(){
        echo "Dog can bark";
    }

    //NO CUMPLE ISP!!!
    //Implementa una interfaz de la cual tiene funciones que no va a usar. 

}
