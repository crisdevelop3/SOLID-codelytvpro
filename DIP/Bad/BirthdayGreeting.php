<?php

class BirthdayGreeting {

    private EmailMessage $emailMessage;

    function __construct(EmailMessage $emailMessage) {
        $this->emailMessage = $emailMessage;
    }

    function sendGreeting($to){
        $this->emailMessage->sendMessage($to);
    }

}
