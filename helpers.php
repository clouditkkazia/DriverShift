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
 * so basically replaces the header("Location: driverlistings.php");
 * @param string string $name
 * @return void
 */

function loadView($name, $data = [])
{
    //inspect($name);
    //extract the variable drvrecords which = array of drivers or the drvshowrecord
    //or when inserting data and i am passing $data [errirs,myvalues etc]->gota go to the page
    extract($data);
    require basePath("App/views/{$name}.view.php");
}


function loadPartials($name)
{
    $viewPartial = basePath("App/views/partials/{$name}.php");
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

/**
 * Mar 22nd added sanitize data
 * sanitize the data for saving
 * @param string $dirty
 */


function sanitize($dirty)
{
    return trim(filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS));
}
