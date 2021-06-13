<?php

class Login extends Controller {

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('usuario/login');
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}

?>