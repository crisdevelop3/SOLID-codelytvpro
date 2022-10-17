<?php

//Bad example
$strawerry = new Strawberry();
$strawerry->name = "Strawerry spring";
$strawerry->price = 2.99;

$taxes = new Taxation();
$taxes->getTaxation($strawerry);
//Ejemplo que no cumple LSP porque fresa tiene la funcion getPricePerSeason
//pero si en vez de pasarle como food una fresa le pasas una banana
//no cumple LSP porque banana no tiene la funcion getPricePerSeason 
//porque el precio de la banana no cambia con la estacion

//END Bad Example


//Nice example
$strawerry_nice = new StrawberryNice();
$strawerry_nice->name = "Strawerry spring";
$strawerry_nice->price = 2.99;

$taxes_nice = new TaxationNice();
$taxes_nice->getTaxation($strawerry_nice);
//Este ejemplo si cumple LSP porque tanto fresa como banana tienen la funcion getPricePerSeason
//Con lo que le pases lo que le pases a Taxation se podra comportar igual sin depender que tipo
//de fruta sea

