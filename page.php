<?php

require 'app/start.php';

if  (empty($_GET['page'])){
    $page = false;
} else {
    $slug = $_GET['page'];

    $page = $db->prepare("
        SELECT *
        FROM pages
        WHERE slug = :slug
        LIMIT 1
    ");

    $page->execute(['slug' => $slug]);

    $page = $page->fetch(PDO::FETCH_ASSOC);

    if ($page) {
      $page['created_at'] = new DateTime($page['created_at']);

      if ($page['updated_at']) {
        $page['updated_at'] = new DateTime($page['updated_at']);
      }
    }

}

require VIEW_ROOT . '/page/show.php';
