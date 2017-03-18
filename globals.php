<?php

include("lib/cronofy.php");

function DebugLog($log){
  $result = file_put_contents(__DIR__ . "/log/debug.log", date("c") . " - " . $log . "\n", FILE_APPEND);
}

$GLOBALS['CRONOFY_CLIENT_ID'] = $_ENV['ID'];
$GLOBALS['CRONOFY_CLIENT_SECRET'] = $_ENV['SECRET'];

$GLOBALS['DOMAIN'] = $_ENV['URL'];

if($GLOBALS['CRONOFY_CLIENT_ID'] == "" || $GLOBALS['CRONOFY_CLIENT_SECRET'] == "" || $GLOBALS['DOMAIN'] == ""){
  header('Location: /setup.php');
}
