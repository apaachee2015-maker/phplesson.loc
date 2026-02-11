<?php

/** @var  Db $db */

$title = 'My Blog:: Home';
$posts = $db->query("SELECT * FROM posts ORDER BY id DESC ")->findAll();

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

//dd($posts);



require_once VIEWS . '/index.tpl.php';

