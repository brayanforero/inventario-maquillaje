<?php $user = current_user(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (!empty($page_title))
            echo remove_junk($page_title);
          elseif (!empty($user))
            echo ucfirst($user['name']);
          else echo "Sistema simple de inventario"; ?>
  </title>
  <!-- CDN EXTERNAS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" /> -->

  <!-- ESTILOS LOCALES -->

  <link rel="stylesheet" href="libs/css/bootstrap.min.css" />
  <link rel="stylesheet" href="libs/css/datepicker.min.css" />
  <link rel="stylesheet" href="libs/css/main.css" />
</head>

<body>
  <?php if ($session->isUserLoggedIn(true)) : ?>
    <header class="d-flex justify-content-between aling-items-center" id="header">
      <h1 class="m-0">SIS-MAKEUP</h1>
      <div class="header-content d-flex justify-content-between aling-items-center">
        <div class="header-date pull-left">
          <strong><?= 'Fecha: ' . date("d/m/Y") ?></strong>
        </div>
        <div>
          <ul class="info-menu list-inline list-unstyled">
            <li class="profile">
              <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
                <img class="img-circle" src="user.jpg" width="100" height="100">
                <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="profile.php?id=<?php echo (int)$user['id']; ?>">
                    <i class="glyphicon glyphicon-user"></i>
                    Perfil
                  </a>
                </li>
                <li>
                  <a href="edit_account.php" title="edit account">
                    <i class="glyphicon glyphicon-cog"></i>
                    Configuración
                  </a>
                </li>
                <li class="last">
                  <a href="logout.php">
                    <i class="glyphicon glyphicon-off"></i>
                    Salir
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div class="sidebar shadow-sm">
      <?php if ($user['user_level'] === '1') : ?>
        <!-- menú de administrador -->
        <?php include_once('admin_menu.php'); ?>

      <?php elseif ($user['user_level'] === '2') : ?>
        <!-- Usuario especial -->
        <?php include_once('special_menu.php'); ?>

      <?php elseif ($user['user_level'] === '3') : ?>
        <!-- Menú del Usuario -->
        <?php include_once('user_menu.php'); ?>

      <?php endif; ?>

    </div>
  <?php endif; ?>

  <div class="page">
    <div class="container-fluid">