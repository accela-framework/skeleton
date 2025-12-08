<?php

namespace App;
use Accela\Accela;

$accela = new Accela([
  "appDir" => __DIR__,
  "url" => "https://example.com",
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
