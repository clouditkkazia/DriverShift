<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 */


function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * load a view
 * 
 * @param string string $name
 * @return void
 */

function loadView($name)
{
    require basePath("views/{$name}.view.php");
}
