<?php

$file = __DIR__ . "/composer.json";
$json = json_decode(file_get_contents($file), true);

$json["name"] = basename(dirname(__DIR__));
unset($json["description"]);
unset($json["scripts"]);

file_put_contents($file,json_encode($json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL);

unlink(__FILE__);
