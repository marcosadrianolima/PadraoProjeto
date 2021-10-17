<?php 
class Core{
    private static $_BaseUrl;
    private static $_URL_ATUAL;
    private static $_Pasta;
    private static $_Metodo;
    private static $_ID;
    function __construct(){
        $_BaseUrl = URI::base();
        $_URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $PastaMetodoAcao = str_replace($_BaseUrl, "",  $_URL_ATUAL);
        $PastaMetodoAcaoSplit = explode("/", $PastaMetodoAcao);
        
        // echo $_Pasta;
    }
    public static function PageMethodAction(){
        self::$_BaseUrl = URI::base();
        self::$_URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $PastaMetodoAcao = str_replace(self::$_BaseUrl, "",  self::$_URL_ATUAL);
        $PastaMetodoAcaoSplit = explode("/", $PastaMetodoAcao);
        if(isset($PastaMetodoAcaoSplit[0])){
            self::$_Pasta = $PastaMetodoAcaoSplit[0];
        }
        if(isset($PastaMetodoAcaoSplit[1])){
            self::$_Metodo = $PastaMetodoAcaoSplit[1];
        }
        if(isset($PastaMetodoAcaoSplit[2])){
            self::$_ID = $PastaMetodoAcaoSplit[2];
        }
    } 
    public static function GetPasta(){
        return self::$_Pasta;
    }
    public static function GetMetodo(){
        return self::$_Metodo;
    }
    public static function GetID(){
        return self::$_ID;
    }

    
}  

