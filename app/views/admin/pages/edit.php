<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <div class="col-md-6 offset-md-3">
    <h1>Edit page</h1>
    <form action="<?php echo BASE_URL; ?>/admin/pages/edit.php" method="POST" autocomplete="off">
      <div class="form-group">
        <label for="name"> Name</label>
        <input type="text" name="name" id="name" value="<?php echo escape($page['name']); ?>" class="form-control">
      </div>

      <div class="form-group">
        <label for="name"> Label</label>
        <input type="text" name="label" id="label" value="<?php echo escape($page['label']); ?>" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="<?php echo escape($page['slug']); ?>" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="body">Body</label>
        <textarea  name="body" id="body" cols="30" rows="10" class="form-control">
          <?php echo escape($page['body']); ?>
        </textarea>
      </div>

      <input type="hidden" name="id" value="<?php echo escape($page['id']); ?>" class="form-control">
      <input type="submit" value="Edit" class="btn btn-default btn-lg btn-block">
    </form>
  </div>
  

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
