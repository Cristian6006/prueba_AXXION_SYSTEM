<?php 
    require_once "modelos/Usuario.php";
    class Usuarios {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once ("vistas/roles/admin/admin.vista.php");
            } 
        }

        public function rolRegistrar(){
            // Verifica si el método de solicitud es GET
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "vistas/modulos/usuarios/registrar_rol.vista.php";
            } 

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $rol = new Usuario;
                $rol->setRolCodigo(null);
                $rol->setrolNombre($_POST['rol_nombre']);
                $rol->registrarRol(); 
                header("Location:?");
                /* $rol = $rol->login(); */
                /* if ($rol) {
                    header("Location:?c=PanelControl");
                } else {
                    header("Location:?");
                } */
            }
            }
            public function rolConsultar(){
                $roles = new Usuario;
                $roles = $roles->readRoles();
                require_once "vistas/modulos/usuarios/consultar_rol.vista.php"; 
            }
        }
        
    


?>