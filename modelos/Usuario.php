<?php
    class Usuario{
        /* Atributos */
        private $rolCodigo;
        private $rolNombre;
        private $UsuarioCodigo;
        private $UsuarioNombres;
        private $UsuarioApellidos;
        private $UsuarioIdentificacion;
        private $UsuarioEmail;
        private $UsuarioPass;
        private $UsuarioEstado;
        
        /* Metodos Sobrecarga de constructores */
        
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

        public function setUsuarioCodigo($UsuarioCodigo){
            $this->UsuarioCodigo = $UsuarioCodigo;
        }
        public function getUsuarioCodigo(){
            return $this->UsuarioCodigo;
        }
        
        public function setUsuarioNombres($UsuarioNombres){
            $this->UsuarioNombres = $UsuarioNombres;
        }
        public function getUsuarioNombres(){
            return $this->UsuarioNombres;
        }
        
        public function setUsuarioApellidos($UsuarioApellidos){
            $this->UsuarioApellidos = $UsuarioApellidos;
        }
        public function getUsuarioApellidos(){
            return $this->UsuarioApellidos;
        }

        public function setUsuarioIdentificacion($UsuarioIdentificacion){
            $this->UsuarioIdentificacion = $UsuarioIdentificacion;
        }
        public function getUsuarioIdentificacion(){
            return $this->UsuarioIdentificacion;
        }

        public function setUsuarioEmail($UsuarioEmail){
            $this->UsuarioEmail = $UsuarioEmail;
        }
        public function getUsuarioEmail(){
            return $this->UsuarioEmail;
        }
        public function setUsuarioPass($UsuarioPass){
            $this->UsuarioPass = $UsuarioPass;
        }
        public function getUsuarioPass(){
            return $this->UsuarioPass;
        }

        public function setUsuarioEstado($UsuarioEstado){
            $this->UsuarioEstado = $UsuarioEstado;
        }
        public function getUsuarioEstado(){
            return $this->UsuarioEstado;
        }
        
        /* Metodos: Persistensia a la base de datos */
        
    }
?>