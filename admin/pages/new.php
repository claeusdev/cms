<?php

require ('../../app/start.php');


  if (!empty($_POST)) {

    $label  = $_POST['label'];
    $name   = $_POST['name'];
    $slug   = $_POST['slug'];
    $body   = $_POST['body'];

    $insertPage = $db->prepare("
        INSERT INTO pages (label, name, slug, body, created_at)
        VALUES (:label, :name, :slug, :body, NOW())
    ");

    $insertPage->execute([
      'label' => $label,
      'name' => $name,
      'slug' => $slug,
      'body' => $body,
    ]);

    header('Location: ' . BASE_URL . '/admin/index.php');
    
  }


require VIEW_ROOT . '/admin/pages/new.php';
