<?php

namespace Accela;

if(file_exists(__DIR__ . "/env.php")){
  require_once __DIR__ . "/env.php";
}

require_once __DIR__ . "/vendor/autoload.php";

$accela = require_once __DIR__ . "/app/init-accela.php";
$accela->route(isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "/");
