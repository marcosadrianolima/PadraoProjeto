  <?php
  require_once "App/core/Core.php";
  require_once "App/core/URI.php";
  require __DIR__.'/vendor/autoload.php';
  
  $_BaseUrl = URI::base();
  $_URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // $core = new Core();
 $core = new Core();
 $core->inicia($_BaseUrl, $_URL_ATUAL);
 die("aqui");
 
  