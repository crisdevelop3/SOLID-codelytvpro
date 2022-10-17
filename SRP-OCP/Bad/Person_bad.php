<?php

class Person_bad {

    public $email;
    public $type;

    function __construct($type, $email) {
        $this->email = $email;
        $this->type = $type;
    }

    //Hay multiples tareas que no respetan principio SRP
    //Hace tarea que no le corresponde (envia email)
    //Acceso a BD y recupera mensaje
    //Devuelve algo una funcion que solo le corresponde enviar email
    function sendEmail($to) {
        $getMessageToSend = "SELECT genericMessage FROM email";
        //....
        echo "Hello `$to`, `$getMessageToSend`";
        return $getMessageToSend;
    }


    //Condicionas el outfit a si es mujer u hombre
    //No cumple OCP (abierto a extension, cerrado a modificacion)
    //Si quieres extenderlo hay que modificarlo... con lo que no lo cumple.
    function getOutfit(){

        if ($this->type == "Woman")
            return "Red T-shirt";
        else if ($this->type == "Man") 
            return "White T-shirt";
    }

}
