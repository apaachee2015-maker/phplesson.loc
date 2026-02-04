<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://phplesson.loc');

require CORE . '/funcs.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
//dump($_GET);
//dump($_SERVER['QUERY_STRING']);
if ($uri === '') {
require CONTROLLERS . '/index.php';

}
elseif ($uri == 'about') {
    require CONTROLLERS . '/about.php';
}
elseif ($uri == 'post') {
    dd("SHOW POST");
}
else {

    abort();

}



