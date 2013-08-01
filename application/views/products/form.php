<div class="large-12 columns">
  <?php echo validation_errors(); ?>
  <?php echo $error['error']; ?>
  <?php $dir = (isset($product['id']) ? "products/update" : "products/create") ?>
  <?php echo form_open_multipart($dir) ?>
  <?php if (isset($product['id'])) { ?>
    <input name="id" value="<?= $product['id'] ?>" type="hidden" />
  <?php } ?>
  <fieldset>
    <legend>Producto</legend>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">Nombre*</span>
      </div>
      <div class="small-9 large-10 columns">
        <input id="name" name="name" value="<?= isset($product['name']) ? $product['name'] : set_value("name") ?>" type="text" required/>
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">Descripci&oacute;n</span>
      </div>
      <div class="small-9 large-10 columns">
        <textarea id="description" name="description" >
          <?= isset($product['description']) ? $product['description'] : set_value("description") ?>
        </textarea>
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">Activo</span>
      </div>
      <div class="small-1 large-10 columns">
        <div class="switch">
          <?php $active = isset($product['active']) ? $product['active'] : set_value("active"); ?>
          <input id="off" name="active" type="radio" value="0" <?php echo($active == "0" ? "checked" : ""); ?> >
          <label for="off" onclick="">Off</label>

          <input id="on" name="active" type="radio" value="1" <?php echo(($active == "1" OR $active == "") ? "checked" : ""); ?> >
          <label for="on" onclick="">On</label>

          <span></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">Imagen*</span>
      </div>
      <div class="small-9 large-10 columns">
        <?php $image = isset($product['image']) ? $product['image'] : set_value("image") ?>
        <input name="image" type="hidden" value="<?= $image ?>" />
        <?php if ($image != "") {?><img style="height: 70px; width: 100px;" src="<?php echo base_url("uploads"); ?>/<?php echo $image; ?>" alt="image_product" /><?php } ?>
        <input id="product_file" name="product_file" type="file" />
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">$*</span>
      </div>
      <div class="small-2 large-2 collapse">
        <input id="peso_price" name="peso_price" type="text" value="<?= isset($product['peso_price']) ? $product['peso_price'] : set_value("peso_price") ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">U$s*</span>
      </div>
      <div class="small-2 large-2 collapse">
        <input id="dolar_price" name="dolar_price" type="text" value="<?= isset($product['dolar_price']) ? $product['dolar_price'] : set_value("dolar_price") ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="small-3 large-2 columns">
        <span class="prefix">Stock*</span>
      </div>
      <div class="small-4 large-2 collapse">
        <input id="stock" name="stock" type="text" value="<?= isset($product['stock']) ? $product['stock'] : set_value("stock") ?>" required/>
      </div>
    </div>

    <div class="large-4 large-offset-9 columns">                
      <ul class="button-group round even-3">
        <li>
          <a href="<?php echo base_url("index.php/products"); ?>" class="small button alert" >Cancelar</a>
        </li>
        <li>
          <input type="submit" class="small button postfix" value="Guardar" />
        </li>
      </ul>
    </div>

  </fieldset>
</form>
</div>