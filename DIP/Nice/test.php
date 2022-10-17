<?php

$emailSender = new EmailMessageNice();

$birthGreating = new BirthdayGreetingNice($emailSender);

$birthGreating->sendGreeting("maria@hola.com");

