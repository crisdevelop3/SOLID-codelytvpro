<?php

$emailSender = new EmailMessage();

$birthGreating = new BirthdayGreeting($emailSender);

$birthGreating->sendGreeting("maria@hola.com");

