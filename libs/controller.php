<?php

class Controller{

    function __construct(){
        //echo "<p>Controlador base</p>";
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/'.$model.'Model.php';

        if(file_exists($url)){
            require $url;
//Models.php
            $modelName = $model.'.php';
            $this->model = new $modelName();
        }
    }
}

?>