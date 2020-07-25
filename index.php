<?php
ob_start();
require_once('includes/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('home.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-12 col-md-8">
    <div class="login-page w-100">
      <!-- <?= sha1("1234") ?> -->
      <div class="text-center">
        <h4>INGRESO AL SIS-MAKEUP</h4>
        <img class="img-circle" src="uni.jpg" width="200" height="160">
      </div>
      <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
          <label for="username" class="control-label">Usario</label>
          <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
          <label for="Password" class="control-label">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-block">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>