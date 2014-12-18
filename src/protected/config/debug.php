<?php
// TODO: remove from release

define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
define('YII_TRACE_LEVEL', 3);

if (!empty($_SERVER['REMOTE_ADDR']) && '82.200.111.246' === $_SERVER['REMOTE_ADDR'] && function_exists('xhprof_enable')) {
    define('XHPROF_PROFILING', false);
} else {
    define('XHPROF_PROFILING', false);
}


// <editor-fold defaultstate="collapsed" desc="Variable-dumping functions." >
function dump_str($var) {
    ob_start();
    var_dump($var);
    $v = ob_get_clean();
    $v = highlight_string("<?\n" . $v . '?>', true);
    $v = preg_replace('/=&gt;\s*<br\s*\/>\s*(&nbsp;)+/i', '=&gt;' . "\t" . '&nbsp;', $v);
    $v = '<div style="background-color: #FFFFFF;">' . $v . '</div>';
    return $v;
}

function dump($var) {
    $arg_list = func_get_args();
    foreach ($arg_list as $arg) {
        echo dump_str($arg);
    }
}

function ddump($var) {
    $arg_list = func_get_args();
    foreach ($arg_list as $arg) {
        dump($arg);
    }

    echo '<pre>';
    debug_print_backtrace();
    echo '</pre>';
    die();
}

function d($var) {
    $arg_list = func_get_args();
    foreach ($arg_list as $arg) {
        echo dump_str($arg);
    }
}
// </editor-fold>
