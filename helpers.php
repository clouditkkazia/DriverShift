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
    //inspect($name);
    require basePath("views/{$name}.view.php");
}


function loadPartials($name)
{
    $viewPartial = basePath("views/partials/{$name}.php");
    if (file_exists($viewPartial)) {
        require $viewPartial;
    } else {
        echo "Partial '{$name} not found!!'";
    }
}

/**
 * Inspect a Value(s)
 * 
 * @param mixed $value
 * @return void
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
}


/**
 * Inspect a Value(s) and Die another day!!!
 * 
 * @param mixed $value
 * @return void
 */

function inspectAndDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
    die();
}
