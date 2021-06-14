<?php
require_once 'models/usuarioModel.php';
class Login extends Controller {

    function __construct(){
        parent::__construct();
        $this->model= new UsuarioModel();
    }

    function render(){
        $actual_link = trim("$_SERVER[REQUEST_URI]");
        $url = explode('/', $actual_link);
        $this->view->render('usuario/login');
    }
  

   function iniciarSesion(){
        $codigo = $_POST['codigo'];
        $clave = $_POST['clave'];
        
        $usuario = $this->model->getByIdPassword(['codigo' => $codigo, 'contrasena' => $clave] );
     
    if(true){
            session_start();
            $_SESSION['nombre'] = $usuario->nombre;
            $_SESSION['apellidos'] = $usuario->apellidos;
            $_SESSION['rol'] = $usuario->rol;
            $_SESSION['correo_ins'] = $usuario->correo_ins;
            $_SESSION['estado'] = $usuario->estado;
            
            if($usuario->estado==1){
                if($usuario->rol==1){   
                    echo'<script type="text/javascript">
                    alert("Bienvenido Directivo: '.$_SESSION['nombre'].' '.$_SESSION['apellidos'].'");
                    </script>';
                    $this->view->render('administrador/panel');
                }
                else if($usuario->rol=2){
                    echo'<script type="text/javascript">
                    alert("Bienvenido Docente: '.$_SESSION['nombre'].' '.$_SESSION['apellidos'].'");
                    </script>'; 
                    //$this->view->render('consulta/detalle');
                }
                else if($usuario->rol==3){
                    echo'<script type="text/javascript">
                    alert("Cliente Adminitrador: '.$_SESSION['nombre'].' '.$_SESSION['apellidos'].'");
                    </script>'; 
                   // $this->view->render('consulta/detalle');
                }
            }else{
                echo'<script type="text/javascript">
                alert("Lo sentimos, en estos momentos su estado es: Inactivo");
                </script>';
                $this->view->render('usuario/login');
            }
        }else{
            echo'<script type="text/javascript">
            alert("Datos errados");
            </script>';
            $this->view->render('usuario/login');
        
        }
      
        
        
        $this->view->alumno = $usuario;
        $this->view->mensaje = "";
       $this->view->render('adninistrador/panel');
        
    }
  
}


?>