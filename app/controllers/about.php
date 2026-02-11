<?php



$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Autem dolor earum error explicabo illum iste itaque maiores minus modi odio,
                        perspiciatis qui vel. Atque eveniet expedita facilis id non veritatis?
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Autem dolor earum error explicabo illum iste itaque maiores minus modi odio,
                        perspiciatis qui vel. Atque eveniet expedita facilis id non veritatis?
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Autem dolor earum error explicabo illum iste itaque maiores minus modi odio,
                        perspiciatis qui vel. Atque eveniet expedita facilis id non veritatis?
                    </p>';

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/about.tpl.php';


