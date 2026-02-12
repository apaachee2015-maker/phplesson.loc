<?php




require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';

require CORE . '/classes/Db.php';
$db_config = require CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_config);
$db2 = (Db::getInstance())->getConnection($db_config);


//$db2 = new Db($db_config);
//dump($db);
//dd($db2);
////dd($db2);

require CORE . '/router.php';




//$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
////dump($_GET);
////dump($_SERVER['QUERY_STRING']);
//if ($uri === '') {
//    require CONTROLLERS . '/index.php';
//
//}
//elseif ($uri == 'about') {
//    require CONTROLLERS . '/about.php';
//}
//elseif ($uri == 'post') {
//    dd("SHOW POST");
//}
//else {
//
//    abort();
//
//}



