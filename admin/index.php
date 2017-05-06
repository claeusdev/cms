<?php

require '../app/start.php';
$pages = $db->query("
  SELECT id, label, name, slug
  FROM pages
  ORDER BY created_at DESC
")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/index.php';
