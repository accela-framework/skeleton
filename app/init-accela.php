<?php

namespace App;
use Accela\Accela;
use function Accela\env;

$accela = new Accela([
  "appDir" => __DIR__,
  "url" => env("url", "http://localhost"),
  "lang" => "ja",
  "serverLoadInterval" => 60,
  "plugins" => [
    "sitemap-xml" => true
  ]
]);

// PageProps
$accela->pageProps("/", function(){
  return [
    "name" => "Accela",
  ];
});

return $accela;
