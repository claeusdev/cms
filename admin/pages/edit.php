<?php

require ('../../app/start.php');

  if (!empty($_POST)) {
    $id     = $_POST['id'];
    $label  = $_POST['label'];
    $name   = $_POST['name'];
    $slug   = $_POST['slug'];
    $body   = $_POST['body'];

    $updatePage = $db->prepare("
      UPDATE pages
      SET
        label = :label,
        name = :name,
        slug = :slug,
        body = :body,
        updated_at = NOW()
      WHERE id = :id
    ");

    $updatePage->execute([
      'id' => $id,
      'label' => $label,
      'name' => $name,
      'slug' => $slug,
      'body' => $body,
    ]);

    header('Location: ' . BASE_URL . '/admin/index.php');
  }

  if (!isset($_GET['id'])) {
    header('Location: ' .BASE_URL . '/admin/index.php');
    die;
  }

  $page = $db->prepare("
    SELECT id, name, label, body, slug
    FROM pages
    where id = :id
  ");

  $page->execute(['id' => $_GET['id']]);

  $page = $page->fetch(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/pages/edit.php';
