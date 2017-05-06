<?php

require('app/start.php');


$pages = $db->query("
    SELECT id, name, slug
    FROM pages
")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';