<?php 
    require_once "modelos/Usuario.php";
    class PanelControl{

        public function main(){
            $sesion = $_SESSION['sesion'];
            $profile = unserialize($_SESSION['profile']);
            if (!empty($_SESSION['sesion'])) {
                require_once "vistas/roles/" . $sesion . "/". $sesion . ".vista.php";
            } else {
                header("Location: ?");
            }
            
        }
    }
?>