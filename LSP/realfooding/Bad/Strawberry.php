<?php

class Strawberry implements Foods {
    //Bad


    // public function priceKG() {
    //     return 2.99 * $this->season;
    // }

    //Fresa depende precio por estacion
    public function getPricePerSeason() {
        return 1.99 * $this->price;
    }


    
}
