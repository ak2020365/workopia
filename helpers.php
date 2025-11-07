<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 * 
 */
function base_path($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * load a view
 * 
 * @param string ($name)
 * @return void
 * 
 */

function loadView($name){
   $viewPath = base_path("views/{$name}.php");

   if(file_exists($viewPath)){
    require $viewPath;
   } else {
    echo "view '{$name} Not Found!'";
   }
}

/**
 * load partials
 * 
 * @param string $name
 * @return void
 * 
 */

function loadPartial($name)
{
   $partialPath = base_path("views/partials/{$name}.php");

    if(file_exists($partialPath)){
    require $partialPath;
   } else {
    echo "view '{$name} Not Found!'";
   }
}

/**
 * inspect a value(s)
 *
 * @param mixed $value
 * @return value
 *  
 */

function inspect ($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}


/**
 * inspect a value(s) and die
 *
 * @param mixed $value
 * @return value
 *  
 */

function inspectAndDie ($value){
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}