<?php
spl_autoload_register('__autoload');
function __autoload($className){
  $path = 'classes/';
  $extension = '.class.php';
  require $path.$className.$extension;
}
 ?>
