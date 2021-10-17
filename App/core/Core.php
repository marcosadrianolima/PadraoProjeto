<?php 
class Core{
    private $_Pasta = NULL;
    private $_Metodo = NULL;
    private $_ID = NULL;
    function __construct(){
        
        // echo $_Pasta;
    }
    public function inicia($_BaseUrl, $_URL_ATUAL){
        $PastaMetodoAcao = str_replace($_BaseUrl, "", $_URL_ATUAL);
        $PastaMetodoAcaoSplit = explode("/", $PastaMetodoAcao);
        if($PastaMetodoAcaoSplit[0] !== NULL && $PastaMetodoAcaoSplit[0] !== ""){
            $_Pasta = $PastaMetodoAcaoSplit[0];

            if(isset($PastaMetodoAcaoSplit[1])){
                $_Metodo = $PastaMetodoAcaoSplit[1];

                if(isset($PastaMetodoAcaoSplit[2])){
                    $_ID = $PastaMetodoAcaoSplit[2];
                }
            }
        }else{
            $_Pasta = "Home";
        }

        $this->CarregaController($_Pasta);
    }
    public function CarregaController($pasta){
        var_dump($pasta);
        if(class_exists($pasta)){
            die("if");
        }else{
            die("else");
        }
    }
    
    
}  

