<?php
class Home{
    public $metodo = '';
    function __construct(){
        switch($metodo){
            default:
            case 'index':
                $this->index();
                break;
        }
    }
    public function index(){
        echo"index.php";
    }
}
    