  <?php
  // require_once "App/core/Core.php";
  
  use App\core\Core;
  
  require_once "App/core/URI.php";
  require __DIR__.'/vendor/autoload.php';
  require_once "App/controller/Home.php";
  use CoffeeCode\DataLayer\Connect;

  // $conn = Connect::getInstance();
  // $error = Connect::getError();
  // var_dump($conn);
  // var_dump($error);
  $_BaseUrl = URI::base();
  $_URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // $core = new Core();
  $core = new Core();
  $core->inicia($_BaseUrl, $_URL_ATUAL);
 
 
  