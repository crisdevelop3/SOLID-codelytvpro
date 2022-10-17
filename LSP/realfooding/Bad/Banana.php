<?php

class Banana implements Foods {
    //Bad


    //Banana no depende precio por estacion
    public function priceKG() {
        return $this->price;
    }

    
}
