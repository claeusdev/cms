<?php require VIEW_ROOT . '/templates/header.php'; ?>
  <div class="container">
    <?php if (empty($pages)): ?>
        <p>No pages at the moment.</p>
    <?php else: ?>
        <h1 class="lead page-header">
          Pages
        </h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Label</th>
              <th>Name</th>
              <th>Slug</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pages as $page): ?>
              <tr>
                <td><?php echo escape($page['label']); ?></td>
                <td><?php echo escape($page['name']); ?></td>
                <td><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug'] ?>"><?php echo escape($page['slug']); ?></a> </td>
                <td><a href="<?php echo BASE_URL; ?>/admin/pages/edit.php?id=<?php echo escape($page['id']); ?>">Edit</a></td>
                <td><a href="<?php echo BASE_URL; ?>/admin/pages/delete.php?id=<?php echo escape($page['id']); ?>">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    <?php endif; ?>
      <a  href="<?php echo BASE_URL; ?>/admin/pages/new.php" class="btn btn-default">Add new page</a>
      <hr>

        <h1 class="lead page-header">
          Posts
        </h1>
        <!--<table class="table table-striped">
          <thead>
            <tr>
              <th>Label</th>
              <th>Name</th>
              <th>Slug</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pages as $page): ?>
              <tr>
                <td><?php echo escape($page['label']); ?></td>
                <td><?php echo escape($page['name']); ?></td>
                <td><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug'] ?>"><?php echo escape($page['slug']); ?></a> </td>
                <td><a href="<?php echo BASE_URL; ?>/admin/pages/edit.php?id=<?php echo escape($page['id']); ?>">Edit</a></td>
                <td><a href="<?php echo BASE_URL; ?>/admin/pages/delete.php?id=<?php echo escape($page['id']); ?>">Delete</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>-->

    <a class="btn btn-success" href="<?php echo BASE_URL; ?>/admin/pages/new.php">Add new post</a>
  </div>
  

  
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
