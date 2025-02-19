<?php
error_reporting(E_ALL | E_STRICT);

function includeProjectInPath()
{
    $root    = realpath(dirname(__FILE__));
    $library = "$root/library";
    $tests   = "$root/tests";

    $path = array(
        $library,
        $tests,
        get_include_path(),
    );
    set_include_path(implode(PATH_SEPARATOR, $path));
}

function enableProjectClassAutoloader()
{
    require_once 'Vmwarephp/Autoloader.php';
    $autoloader = new \Vmwarephp\Autoloader;
    $autoloader->register();
}

includeProjectInPath();
enableProjectClassAutoloader();
