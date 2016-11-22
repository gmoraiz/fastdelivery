<?php

spl_autoload_register(function ($class){
    
    # Novos diretórios devem ser adicionados aqui 
    $diretorios = ["configs/", "webapp/model/", "webapp/view/", 
                    "webapp/controller/", "webapp/public/", "webservice/","webservice/model/","webservice/controller/"];
    
    foreach($diretorios as $pasta){
        if(file_exists($pasta . $class . ".php")){
            require $pasta . $class . ".php";
            break;
        }
    }
});
    

?>