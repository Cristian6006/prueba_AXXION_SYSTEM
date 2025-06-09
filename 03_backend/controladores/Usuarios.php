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
                header("Location:?c=Usuarios&a=rolConsultar");
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
                header("Location:?c=Usuarios&a=usuarioConsultar");
            }
            }
        
            public function usuarioActualizar(){
                if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $userId = new Usuario;
                $userId = $userId->getUsuarioById($_GET['idUser']);
                require_once 'vistas/modulos/usuarios/actualizar_usuario.vista.php';
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo'Toy actualizando';
                $userAct = new Usuario;
                $userAct->setRolCodigo($_POST['rol_codigo']);
                $userAct->setUsuarioCodigo($_POST['usuario_codigo']);
                $userAct->setUsuarioNombres($_POST['usuario_nombres']);
                $userAct->setUsuarioApellidos($_POST['usuario_apellidos']);
                $userAct->setUsuarioIdentificacion($_POST['usuario_identificador']);
                $userAct->setUsuarioEmail($_POST['usuario_email']);
                $userAct->setUsuarioPass($_POST['usuario_pass']);
                $userAct->setUsuarioEstado($_POST['usuario_estado']);
                $userAct->actualizarUsuario();
                header("Location:?c=Usuarios&a=usuarioConsultar"); 
            }
        }

            public function rolEliminar(){
                    $rol = new Usuario;
                    $rol->eliminarRol($_GET['idRol']);
                    header("Location:?c=Usuarios&a=rolConsultar");
                }


    public function rolActualizar() {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rolId = new Usuario;
                $rolId = $rolId->getRolById($_GET["idRol"]);
                require_once "vistas/modulos/usuarios/actualizar_rol.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
                    $rolAct = new Usuario;
                    $rolAct->setRolCodigo($_POST['rol_codigo']);
                    $rolAct->setRolNombre($_POST['rol_nombre']);
                    $rolAct->actualizarRol();
                    header("Location: ?c=Usuarios&a=rolConsultar");
            }        
        else {
            header("Location: ?c=PanelControl");
        }
    }



                public function usuarioEliminar(){
                    $usuario = new Usuario;
                    $usuario->eliminarUsuario($_GET['idUser']);
                    header("Location:?c=Usuarios&a=usuarioConsultar");
                }
            }
    


    
    


?>