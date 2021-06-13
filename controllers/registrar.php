<?php
class Registrar extends Controller {

function __construct(){
    parent::__construct();
}

function render(){
    $this->view->render('usuario/registrar');
}

function saludo(){
    echo "<p>Ejecutaste el método Saludo</p>";
}
}
?>