<?php require VIEW_ROOT . '/templates/header.php'; ?>
    
    <div class="container">
        <?php if (!$page): ?>
            <p>Sorry, No page found!!</p>
        <?php else: ?>
            <h2><?php echo escape($page['name']); ?></h2>

            <p><?php echo $page['body']; ?></p>

            <p>
            Created on <?php echo $page['created_at']->format('jS M Y'); ?>
            <?php if ($page['updated_at']): ?>
                Last updated <?php echo $page['updated_at']->format('jS M Y'); ?>
            <?php endif; ?>
            </p>

        <?php endif; ?>
    </div>
    
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
