<?php 
    require_once "modelos/Usuario.php";
    class IniciarSesion {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once ("vistas/empresa/iniciar_sesion.vista.php");
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Crear objeto 1
                $usuario1 = new Usuario;
                $usuario1->setrolCodigo(1); 
                $usuario1->setrolNombre("admin");           
                $usuario1->setusuarioCodigo(15);           
                $usuario1->setusuarioNombres('Albeiro');           
                $usuario1->setusuarioApellidos('Ramos Villamil');           
                $usuario1->setusuarioIdentificacion('123456789');           
                $usuario1->setusuarioEmail('correo@soysena.edu.co');           
                $usuario1->setusuarioPass(sha1('12345'));           
                $usuario1->setusuarioEstado(1);        
                
                //Crear objeto 2
                $usuario2 = new Usuario(
                    2,
                    'vendedor',
                    3,
                    'pepito',
                    'perez',
                    '987654321',
                    'pepito@perez.com', 
                    sha1('12345'),
                    0
                );
                // Crear objeto 3
                $usuario3 = new Usuario('correo@pruba.com', sha1('12345'));
                
                // Crear objeto 4
                $usuario4 = new Usuario($_POST['usuario_email'], sha1($_POST['usuario_pass']));
                
                
                print_r($usuario1);
                echo "<br><br>";
                print_r($usuario2);
                echo "<br><br>";
                print_r($usuario3);
                echo "<br><br>";
                print_r($usuario4);

            }
        }
    }

?>