<?php


use Trinhprz\Conceptual\SingleTon;

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/singleton_php_exemple/base.php');

/**
 * The cline code
 */
function clineCode()
{
    $s1 = SingleTon::getInstance();
    $s2 = SingleTon::getInstance();

    if ($s1 == $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clineCode();
