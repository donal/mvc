<?php
// available vars:
// $id
?>
<html>
<body>
  <?php if (isset($template->thing)): ?>
    <h2>This is the show page for the thing named "<?php echo $template->thing['name']; ?>" and the id "<?php echo $template->thing['id']; ?>"</h2>
  <?php else: ?>
    <h2>The thing with id "<?php echo $template->id; ?>" does not exist</h2>
  <?php endif; ?>
</body>
</html>
