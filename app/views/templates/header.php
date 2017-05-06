
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CritCMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo BASE_URL ?>/css/app.css" rel="stylesheet">
        <link href="<?php echo BASE_URL ?>/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="header clearfix">
        <div class="container">
            <nav class="navbar navbar-toggleable-md navbar-light bg-white">
                <div class="navbar-brand">
                    <a href="<?php echo BASE_URL; ?>">Critac</a>
                </div>
                <ul class="navbar-nav">
                    <?php if (empty($pages)): ?>
                        
                    <?php else: ?>
                        <?php foreach($pages as $page): ?>
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['name']; ?></a>
                            </li>
                        <?php endforeach; ?> 
                    <?php endif; ?>
                </ul>
            </nav>
            
        </div>
      </div>
      <div class="container">
      
      