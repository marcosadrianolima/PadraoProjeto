<?php 
namespace App\core;
class Core{
    
    function __construct(){}


    public function inicia($_BaseUrl, $_URL_ATUAL){
        
        $PastaMetodoAcao = str_replace($_BaseUrl, "", $_URL_ATUAL);
        $PastaMetodoAcaoSplit = explode("/", $PastaMetodoAcao);
        if($PastaMetodoAcaoSplit[0] !== NULL && $PastaMetodoAcaoSplit[0] !== ""){
            $pasta = ucfirst($PastaMetodoAcaoSplit[0]);
            
            if(isset($PastaMetodoAcaoSplit[1])){
                $metodo = $PastaMetodoAcaoSplit[1];

                if(isset($PastaMetodoAcaoSplit[2])){
                    $id = $PastaMetodoAcaoSplit[2];
                }else{
                    $id = 0;
                }
            }
            else{
                $metodo = 'index';
            }
        }else{
             $pasta = "Home";
             $metodo = 'index';
             $id = 0;
        }

        $controller = $pasta;
        if(class_exists($controller)){
            call_user_func_array(new $controller, $metodo);
            
        }else{
            die("Error");
        }
    }
}  

