<?php

class StrawberryNice implements FoodsNice {
    //Nice

    public function getPricePerSeason() {
        return 1.99 * $this->price;
    }


    
}
