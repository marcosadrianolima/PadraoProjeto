<?php 
class Core{
    private $_Pasta = NULL;
    private $_Metodo = NULL;
    private $_ID = NULL;
    function __construct(){}


    public function inicia($_BaseUrl, $_URL_ATUAL){
        $PastaMetodoAcao = str_replace($_BaseUrl, "", $_URL_ATUAL);
        $PastaMetodoAcaoSplit = explode("/", $PastaMetodoAcao);
        if($PastaMetodoAcaoSplit[0] !== NULL && $PastaMetodoAcaoSplit[0] !== ""){
            $_Pasta = ucfirst($PastaMetodoAcaoSplit[0]);
            
            if(isset($PastaMetodoAcaoSplit[1])){
                $_Metodo = $PastaMetodoAcaoSplit[1];

                if(isset($PastaMetodoAcaoSplit[2])){
                    $_ID = $PastaMetodoAcaoSplit[2];
                }else{
                    $_ID = null;
                }
            }
            else{
                $_Metodo = 'index';
            }
        }else{
             $_Pasta = "Home";
             $_Metodo = 'index';
             $_ID = null;
        }
        
        $this->CarregaController($_Pasta, $_Metodo, null);
    }
    public function CarregaController($pasta , $metodo, $id){
        $controller = $pasta;
        if(class_exists($pasta)){
            $pagina = new $controller;  
        }else{
            die("Error");
        }
    }
    
    
}  

