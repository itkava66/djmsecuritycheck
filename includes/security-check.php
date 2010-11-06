<?php

if (PHP_SAPI != 'cli') {
    if (ini_get('register_globals')) {
        die("Error: register_globals is on\n");
    } elseif (ini_get('magic_quotes_gpc')) {
        die("Error: magic_quotes_gpc is on\n");
    } elseif (ini_get('magic_quotes_runtime')) {
        die("Error: magic_quotes_runtime is on\n");
    } elseif (ini_get('magic_quotes_sybase')) {
        die("Error: magic_quotes_sybase is on\n");
    }
}
