<?php

session_start();

require_once 'Controller/Dispatcher.php';

$dispatcher = new Dispatcher();
  
$dispatcher->dispatch();
?>