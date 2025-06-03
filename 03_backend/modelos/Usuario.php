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
        
        /* Metodos Sobrecarga de constructores */
        public function __construct(){
            try {
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
        
    }
?>