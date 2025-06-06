<?php
    class Usuario{
        /* Atributos */
        private $rolCodigo;
        private $rolNombre;
        private $usuarioCodigo;
        private $usuarioNombres;
        private $usuarioApellidos;
        private $usuarioIdentificacion;
        private $usuarioEmail;
        private $usuarioPass;
        private $usuarioEstado;
        private $dbh; // Instancia de la conexion a la base de datos
        
        /* Metodos Sobrecarga de constructores */
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = "__construct" . $i)) {
                    call_user_func_array(array($this, $f),$a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        // Constructor con 0 parametros
        public function __construct0(){}
        
        // Constructor con 9 parametros
        public function __construct9(           
            $rolCodigo,
            $rolNombre,
            $usuarioCodigo,
            $usuarioNombres,
            $usuarioApellidos,
            $usuarioIdentificacion,
            $usuarioEmail,
            $usuarioPass,
            $usuarioEstado,
            ){
                $this->rolCodigo = $rolCodigo;
                $this->rolNombre = $rolNombre;
                $this->usuarioCodigo = $usuarioCodigo;
                $this->usuarioNombres = $usuarioNombres;
                $this->usuarioApellidos = $usuarioApellidos;
                $this->usuarioIdentificacion = $usuarioIdentificacion;
                $this->usuarioEmail = $usuarioEmail;
                $this->usuarioPass = $usuarioPass;
                $this->usuarioEstado = $usuarioEstado;
            }
            
            // Constructor con 8 parametros
            public function __construct8(           
                $rolCodigo,
                $usuarioCodigo,
                $usuarioNombres,
                $usuarioApellidos,
                $usuarioIdentificacion,
                $usuarioEmail,
                $usuarioPass,
                $usuarioEstado,
                ){
                    $this->rolCodigo = $rolCodigo;
                    $this->usuarioCodigo = $usuarioCodigo;
                    $this->usuarioNombres = $usuarioNombres;
                    $this->usuarioApellidos = $usuarioApellidos;
                    $this->usuarioIdentificacion = $usuarioIdentificacion;
                    $this->usuarioEmail = $usuarioEmail;
                    $this->usuarioPass = $usuarioPass;
                    $this->usuarioEstado = $usuarioEstado;
                }

            // Constructor con 2 parametros
            public function __construct2($usuarioEmail, $usuarioPass){
                $this->usuarioEmail = $usuarioEmail;
                $this->usuarioPass = $usuarioPass;
            }
        
        /* Metodos: Setter y Getter */
        
        // $rolCodigo
        public function setrolCodigo($rolCodigo){
            $this->rolCodigo = $rolCodigo;
        }
        public function getrolCodigo(){
            return $this->rolCodigo;
        }
        
        public function setrolNombre($rolNombre){
            $this->rolNombre = $rolNombre;
        }
        public function getrolNombre(){
            return $this->rolNombre;
        }

        public function setusuarioCodigo($usuarioCodigo){
            $this->usuarioCodigo = $usuarioCodigo;
        }
        public function getusuarioCodigo(){
            return $this->usuarioCodigo;
        }
        
        public function setusuarioNombres($usuarioNombres){
            $this->usuarioNombres = $usuarioNombres;
        }
        public function getusuarioNombres(){
            return $this->usuarioNombres;
        }
        
        public function setusuarioApellidos($usuarioApellidos){
            $this->usuarioApellidos = $usuarioApellidos;
        }
        public function getusuarioApellidos(){
            return $this->usuarioApellidos;
        }

        public function setusuarioIdentificacion($usuarioIdentificacion){
            $this->usuarioIdentificacion = $usuarioIdentificacion;
        }
        public function getusuarioIdentificacion(){
            return $this->usuarioIdentificacion;
        }

        public function setusuarioEmail($usuarioEmail){
            $this->usuarioEmail = $usuarioEmail;
        }
        public function getusuarioEmail(){
            return $this->usuarioEmail;
        }
        public function setusuarioPass($usuarioPass){
            $this->usuarioPass = $usuarioPass;
        }
        public function getusuarioPass(){
            return $this->usuarioPass;
        }

        public function setusuarioEstado($usuarioEstado){
            $this->usuarioEstado = $usuarioEstado;
        }
        public function getusuarioEstado(){
            return $this->usuarioEstado;
        }
        
        /* Metodos: Persistensia a la base de datos */
        # CU01 - Iniciar Sesion
        public function login(){
            try {
                $sql = 'SELECT * FROM USUARIOS
                        WHERE usuario_email = :usuarioEmail AND usuario_pass = :usuarioPass';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('usuarioEmail', $this->getUsuarioEmail());
                $stmt->bindValue('usuarioPass', sha1($this->getUsuarioPass()));
                $stmt->execute();
                $userDB = $stmt->fetch();
                if($userDB){
                    $user = new Usuario(
                        $userDB['rol_codigo'],
                        $userDB['usuario_codigo'],
                        $userDB['usuario_nombres'],
                        $userDB['usuario_apellidos'],
                        $userDB['usuario_identificador'],
                        $userDB['usuario_email'],
                        $userDB['usuario_pass'],
                        $userDB['usuario_estado']
                    );
                    //unset($user->dbh);
                    return $user;
                }else{
                    return false;
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        # CU03 - Registrar Rol
        public function registrarRol(){
            try {
                $sql = 'INSERT INTO ROLES VALUES (:rolCodigo,:rolNombre)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $this->getRolCodigo());
                $stmt->bindValue('rolNombre', $this->getRolNombre());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU04 - Consultar Roles
        public function readRoles(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM ROLES';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolObj = new Usuario;
                    $rolObj->setRolCodigo($rol['rol_codigo']);
                    $rolObj->setRolNombre($rol['rol_nombre']);
                    array_push($rolList, $rolObj);
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener el Rol por el código
        public function getRolById($rolCode) {
            try {
                $sql = "SELECT * FROM ROLES WHERE rol_codigo=:rolCodigo";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $rolCode);
                $stmt->execute();
                $rolDb = $stmt->fetch();
                $rol = new Usuario;
                $rol->setRolCodigo($rolDb['rol_codigo']);
                $rol->setRolNombre($rolDb['rol_nombre']);
                return $rol;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU05 - Actualizar Rol
        public function actualizarRol(){
            try {
                $sql = 'UPDATE ROLES SET
                                rol_codigo = :rolCodigo,
                                rol_nombre = :rolNombre
                            WHERE rol_codigo = :rolCodigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $this->getRolCodigo());
                $stmt->bindValue('rolNombre', $this->getRolNombre());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU06 - Eliminar Rol
        public function eliminarRol($rolCode){
            try {
                $sql = 'DELETE FROM ROLES WHERE rol_codigo = :rolCodigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $rolCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

                # CU04 - Consultar Roles
        public function readUsuario(){
            try {
                $userList = [];
                $sql = 'SELECT * FROM USUARIOS';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $usuario) {
                    $userObj = new Usuario;
                    $userObj->setUsuarioCodigo($usuario['usuario_codigo']);
                    $userObj->setUsuarioNombres($usuario['usuario_nombres']);
                    $userObj->setUsuarioApellidos($usuario['usuario_apellidos']);
                    $userObj->setUsuarioIdentificacion($usuario['usuario_identificador']);
                    $userObj->setUsuarioEmail($usuario['usuario_email']);
                    $userObj->setUsuarioEstado($usuario['usuario_estado']);
                    array_push($userList, $userObj);
                }
                return $userList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
            
        }
                # CU03 - Registrar Rol
        public function registrarUsuario(){
            try {
                $sql = 'INSERT INTO USUARIOS VALUES (:rolCodigo, :usuarioCodigo, :usuarioNombres, :usuarioApellidos, :usuarioIdentificacion, :usuarioEmail, :usuarioPass, :usuarioEstado)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $this->getRolCodigo());
                $stmt->bindValue('usuarioCodigo', $this->getUsuarioCodigo());
                $stmt->bindValue('usuarioNombres', $this->getUsuarioNombres());
                $stmt->bindValue('usuarioApellidos', $this->getUsuarioApellidos());
                $stmt->bindValue('usuarioIdentificacion', $this->getUsuarioIdentificacion());
                $stmt->bindValue('usuarioEmail', $this->getUsuarioEmail());
                $stmt->bindValue('usuarioPass', $this->getUsuarioPass());
                $stmt->bindValue('usuarioEstado', $this->getUsuarioEstado());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
    
?>