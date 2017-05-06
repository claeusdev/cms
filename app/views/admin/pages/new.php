<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <div class="col-md-6 offset-md-3">
    <h1>Add new page</h1>
    <form action="<?php echo BASE_URL; ?>/admin/pages/new.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="name">Name</label>
           <input type="text" name="name" id="name" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="label">Label</label>
          <input type="text" name="label" id="label" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" name="slug" id="slug" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea  name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        <input type="submit" value="Add page" class="btn btn-default btn-lg btn-block">
    </form>
  </div>
  

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
