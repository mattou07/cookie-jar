<?php

// This will autoload Cookie Jar's classes
function cookiejar_autoload($class)
{
    // Needed to handle namespaces
    $parts = explode('\\', $class);
    require 'classes/' . end($parts) . '.php';
}

spl_autoload_register('cookiejar_autoload');