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
        

            public function usuarioConsultar(){
                $usuarios = new Usuario;
                $usuarios = $usuarios->readUsuario();
                require_once "vistas/modulos/usuarios/consultar_usuario.vista.php";  
            }
        
    

        public function usuarioRegistrar(){
            // Verifica si el método de solicitud es GET
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "vistas/modulos/usuarios/registrar_usuario.vista.php";
            } 
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $usuario = new Usuario;
                $usuario->setRolCodigo($_POST['rol_codigo']);
                $usuario->setusuarioCodigo(null);
                $usuario->setUsuarioNombres($_POST['usuario_nombres']);
                $usuario->setusuarioApellidos($_POST['usuario_apellidos']);
                $usuario->setusuarioIdentificacion($_POST['usuario_identificador']);
                $usuario->setusuarioEmail($_POST['usuario_email']);
                $usuario->setusuarioPass(sha1($_POST['usuario_pass']));
                $usuario->setusuarioEstado($_POST['usuario_estado']);
                $usuario->registrarUsuario(); 
                header("Location:?");
            }
            }
        
        }
    


?>