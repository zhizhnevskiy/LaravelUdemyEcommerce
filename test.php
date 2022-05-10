<?php

$name  = "henry\n";
$fname = $name;
unset($name);
//xdebug_debug_zval('name');
echo $fname;
