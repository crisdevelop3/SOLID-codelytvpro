<?php

class BirthdayGreetingNice {

    private SendMessageNice $sendMessageNice;

    function __construct(SendMessageNice $sendMessageNice) {
        $this->sendMessageNice = $sendMessageNice;
    }

    function sendGreeting($to){
        $this->sendMessageNice->sendMessage($to);
    }

}
