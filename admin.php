<?php
$page_title = 'Admin página de inicio';
require_once('includes/load.php');
// Comprobar qué nivel de usuario tiene permiso para ver esta página
page_require_level(1);
?>
<?php
$c_categorie     = count_by_id('categories');
$c_product       = count_by_id('products');
$c_sale          = count_by_id('sales');
$c_user          = count_by_id('users');
$products_sold   = find_higest_saleing_product('10');
$recent_products = find_recent_product_added('5');
$recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>


<div class="col-md-9">
  <?php echo display_msg($msg); ?>
</div>
</div>
<div class="row">
  <div class="col-12 col-lg-2">
    <div class="col-12 shadow-sm">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-CENTER text-center bg-info">
          <i class="fas fa-shopping-cart text-white h1 m-0"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="mb-1"> <?php echo $c_sale['total']; ?></h2>
          <p class="text-muted m-0">Ventas</p>
        </div>
      </div>
    </div>
  </div>
  <!-- ultimas ventas -->
  <div class="col-12 col-lg-10">
    <div class="row">
      <div class="col-12">
        <div class="panel panel-default shadow-sm">
          <div class="panel-heading">
            <strong>
              <i class="fas fa-cart-plus text-info h5 m-0 mr-1"></i>
              <span>ÚLTIMAS VENTAS</span>
            </strong>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
              <thead>
                <tr>
                  <th class="text-center" style="width: 100px;">#</th>
                  <th>Producto</th>
                  <th>Venta total</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($recent_sales as  $recent_sale) : ?>
                  <tr>
                    <td class="text-center"><?php echo count_id(); ?></td>
                    <td>
                      <a href="edit_sale.php?id=<?php echo (int)$recent_sale['id']; ?>">
                        <?php echo remove_junk(first_character($recent_sale['name'])); ?>
                      </a>
                    </td>


                    <td>Bs<?php echo remove_junk(first_character($recent_sale['price'])); ?></td>
                  </tr>

                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- productos recientemente añadidos -->
  <div class="col-12">
    <div class="panel panel-default shadow-sm">
      <div class="panel-heading">
        <strong>
          <div class="fas fa-clock text-info h5 m-0 mr-1"></div>
          <span>Productos recientemente añadidos</span>
        </strong>
      </div>
      <div class="panel-body">

        <div class="list-group">
          <?php foreach ($recent_products as  $recent_product) : ?>
            <a class="list-group-item clearfix" href="edit_product.php?id=<?php echo    (int)$recent_product['id']; ?>">
              <h5 class="list-group-item-heading">
                <?php if ($recent_product['media_id'] === '0') : ?>
                  <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                <?php else : ?>
                  <img class="img-avatar img-circle" src="uploads/products/<?php echo $recent_product['image']; ?>" alt="" />
                <?php endif; ?>
                <?php echo remove_junk(first_character($recent_product['name'])); ?>
                <span class="label label-warning pull-right">
                  BS<?php echo (int)$recent_product['sale_price']; ?>
                </span>
              </h5>
              <span class="list-group-item-text pull-right">
                <?php echo remove_junk(first_character($recent_product['categorie'])); ?>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>




  <?php include_once('layouts/footer.php'); ?>