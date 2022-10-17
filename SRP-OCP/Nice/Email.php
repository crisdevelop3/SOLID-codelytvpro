<?php

class Email {

    function __construct() {
        // Config del email
    }

    function sendEmail($to) {
        $message = getGenericMessage(); //En accesBD.php
        echo "Message $message sent to $to";
    }

}
