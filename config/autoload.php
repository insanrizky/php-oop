<?php
spl_autoload_register(function($class){
  $class = strtolower($class);
  spl_autoload($class);
});

function binding($class){
  $model = [];
  foreach($class as $c){
    $classname = "\Model\\".strtoupper($c);
    $model[strtolower($c)] = new $classname;
  }
  return (object) $model;
}

/**
 * AutoLoad for Capitalize DirName, FileName, and Namespace
 * Couldn't use spl_autoload();
 * Instead, use Require;
 */
// spl_autoload_register(function($class){
//   $class = str_replace("\\", "/", $class);
//   require $class.".php";
// });
