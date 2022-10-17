<?php

abstract class Person_nice {

    public $email;

    function __construct($email) {
        $this->email = $email;
    }

    function sendEmail($to) {
        $this->email->sendEmail($to);
    }

    abstract protected function getOutfit();

}
