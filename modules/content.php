<div class="content">
<div class="left">
      <?php
          include ('Category/show_category.php');
          include ('Brand/show_brand.php');
      ?>
</div>
<div class="right">

  <?php
  if(isset($_GET['xem']) && $_GET['xem'] == 'product_category'){
      include "Category/show_product_category.php";
  } else if(isset($_GET['xem']) && $_GET['xem'] == 'product_brand') {
      include('Brand/show_product_brand.php');
  } else if(isset($_GET['xem']) && $_GET['xem'] == 'product_details') {
      include('Product/show_product_details.php');
  } else {
  include ('Product/show_product.php');
  }
  ?>
</div>
</div>