<?php

if(!defined('ABSPATH')){
    die ("can't access");

}

register_activation_hook(__FILE__, $function);
register_deactivation_hook($file, $function);

?>