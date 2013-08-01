<div class="large-5 small-6 columns">
  <img src="<?php echo base_url("uploads"); ?>/<?php echo $product['image']; ?>">
  <div class="panel">
    <h5><?php echo $product['name']; ?></h5>
    <h6 class="subheader">$<?php echo $product['peso_price']; ?></h6>
    <h6 class="subheader">U$s<?php echo $product['dolar_price']; ?></h6>
  </div>
</div>
<p class="lead"><?php echo $product['description']; ?></p>
<p>Stock: <?php echo $product['stock']; ?></p>
<a class="close-reveal-modal">&#215;</a>