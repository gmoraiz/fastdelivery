<?php

require_once 'configs/autoloading.php';

class PedidoController extends Sessao{
    public function __construct(){
        parent::__construct();
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
             include "webapp/view/pedido.html";
        }else{
             header("HTTP/1.0 404 Not Found");
        }
    }
    
    
   
    
}


?>