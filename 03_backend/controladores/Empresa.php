<?php 
class Empresa {
    public function main(){      
    require_once "vistas/empresa/header.vista.php";
    require_once "vistas/empresa/index.vista.php";
    require_once "vistas/empresa/footer.vista.php";
    }
    public function about(){
    require_once "vistas/empresa/header.vista.php";      
    require_once "vistas/empresa/about.vista.php";      
    require_once "vistas/empresa/footer.vista.php";      
    }
    public function shop(){
    require_once "vistas/empresa/header.vista.php";      
    require_once "vistas/empresa/shop.vista.php";      
    require_once "vistas/empresa/footer.vista.php";            
    }
    public function contact(){
    require_once "vistas/empresa/header.vista.php";      
    require_once "vistas/empresa/contact.vista.php";      
    require_once "vistas/empresa/footer.vista.php";      
    }
}
?>