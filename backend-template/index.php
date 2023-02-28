<?php 
include './.components/header/head.php';
include './.components/header/header.php';
include './.components/header/sidebar.php';

// DATABASE CONNECTION
include './functions/conn.php';


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  <!-- ROUTER CONNECTION -->
  <?php
    if (isset($_GET['site'])) {
        $site=$_GET['site'];

      }
    else {
      $site = 'index.php';
    }
      include "./views/$site";
  ?>

  
  </div>
  <!-- /.content-wrapper -->

<?php 
include './.components/footer/footer.php';
?>