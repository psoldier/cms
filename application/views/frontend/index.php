<div class="row">

  <!-- Side Bar -->

  <div class="large-4 small-12 columns">

    <img src="<?php echo base_url("public"); ?>/img/mundo.jpg">

    <div class="hide-for-small panel">
      <h3>El Mundo</h3>
      <h5 class="subheader">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit quis justo a ultricies. Aenean in euismod ante. Etiam eleifend tincidunt quam a adipiscing. Sed ut lorem orci.
      </h5>
    </div>

  </div>

  <!-- End Side Bar -->


  <!-- Thumbnails -->

  <div class="large-8 columns">
    <div class="row">
      <?php foreach ($products as $product): ?>
        <div class="large-4 small-6 columns">
          <a href="<?php echo base_url("index.php/description"); ?>/<?php echo $product['id'];?>" data-reveal-id="myModal" data-reveal-ajax="true">
            <img src="<?php echo base_url("uploads"); ?>/<?php echo $product['image']; ?>" style="height: 144px; width: 193px;">

            <div class="panel" style="height: 100px">
              <h5><?= $product['name'];?></h5>
              <h6 class="subheader">$<?= $product['peso_price'];?></h6>
            </div>
          </a>
        </div>
      <?php endforeach ?>
      
    </div>


<!--     End Thumbnails -->


   
  </div>
</div>


<div id="myModal" class="reveal-modal">
  
</div>