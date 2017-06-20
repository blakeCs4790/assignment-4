<?php

// database functions ************************************************

function fConnectToDatabase() {
    $db = new PDO('mysql:host=mysql;dbname=Cs3620','root', '');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}
?>
