<?php
$page_title = 'Mi perfil';
require_once('includes/load.php');
//Comprobar qué nivel de usuario tiene permiso para ver esta página
page_require_level(3);
?>
<?php
$user_id = (int)$_GET['id'];
if (empty($user_id)) :
  redirect('home.php', false);
else :
  $user_p = find_by_id('users', $user_id);
endif;
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-12 col-md-6">
    <div class="panel profile shadow-sm">
      <div class="jumbotron text-center bg-red mb-3">
        <img class="img-circle img-size-2" src="uploads/users/<?php echo $user_p['image']; ?>" alt="">
        <h3><?php echo first_character($user_p['name']); ?></h3>
      </div>
      <?php if ($user_p['id'] === $user['id']) : ?>
        <ul class="nav nav-pills nav-stacked  p-2">
          <li><a href="edit_account.php" class="btn btn-info"> <i class="fas fa-pen"></i> Editar perfil</a></li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>