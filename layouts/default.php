<?php include './includes/header.php'; ?>

<div class="wrapper">
  <?php include './includes/sidebar.php'; ?>
  <div class="main-panel">
    <?php include './includes/nav.php'; ?>
    <div class="content">
      <div class="container-fluid">

        <?php echo $content; ?>
        
      </div>
    </div>
    <?php include './includes/footer.php'; ?>
  </div>
</div>

<?php include './includes/scripts.php'; ?>