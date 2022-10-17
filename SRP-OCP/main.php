<?php

$email = new Email();

//$person = new Person_bad("Woman", $email); //Bad

//$person = new Person_nice($email); //nice

//$person->sendEmail("maria@prueba.com");

//$person->getOutfit();




//OCP
$woman = new Woman("175");

$woman->sendEmail("Maria");

$wear = $woman->getOutfit();

