<?php

class Bird_nice implements AnimalFly {


    public function fly(){
        echo "Bird can fly";
    }

    //SI CUMPLE ISP!!!
    //Se han desgranado, segregado las responsabilidades de esa gran interfaz
    //que era Animals en varias pequeñitas (animales voladores, animales ladradores)
    
}
