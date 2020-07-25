<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?><img src="sistema.jpg" width="600" height="500">
          
      
  
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
