<?php

class Dog_nice implements AnimalBark {


    public function run(){
        echo "Dog can run!";
    }
    public function bark(){
        echo "Dog can bark";
    }

    //SI CUMPLE ISP!!!
    //Se han desgranado, segregado las responsabilidades de esa gran interfaz
    //que era Animals en varias pequeñitas (animales voladores, animales ladradores)

}
