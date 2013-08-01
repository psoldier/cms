<div class="row">
  <div class="large-2 large-offset-10 columns">
    <a href="<?php echo base_url("index.php/products/create"); ?>"><i class="foundicon-add-doc">Crear Producto</i></a>
  </div>
</div>
<br>
<div class="row">
  <div class="small-12 large-centered columns">
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Imagen</th>
          <th>Precio en $</th>
          <th>Precio en U$s</th>
          <th>Stock</th>
          <th>Fecha de Creacion</th>
          <th>Fecha de Modificacion</th>
          <th>Activo</th>
          <th>Operaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $product): ?>
          <tr>
            <td><?= $product['id'];?></td>
            <td><?= $product['name'];?></td>
            <td><?= substr($product['description'], 1, 30);?>..</td>
            <td><img style="height: 70px; width: 100px;" src="<?php echo base_url("uploads"); ?>/<?php echo $product['image']; ?>" alt="image_product" /></td>
            <td>$<?= $product['peso_price'];?></td>
            <td>U$s<?= $product['dolar_price'];?></td>
            <td><?= $product['stock'];?></td>
            <td><?= $product['creation_datetime'];?></td>
            <td><?= $product['update_datetime'];?></td>
            <td><?= ($product['active']?"Si":"No");?></td>
            <td>
              <div class="large-12 columns" >
                <a href="<?php echo base_url("index.php/products/update"); ?>/<?= $product['id'];?>">
                  <span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Editar Producto">
                    <i class="foundicon-edit"></i>
                  </span> 
                </a> 
                <a href="<?php echo base_url("index.php/products/delete"); ?>/<?= $product['id'];?>" onclick='javascript:return confirm("Esta seguro que desea eliminar este articulo?")' >
                  <span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Eliminar Producto">
                    <i class="foundicon-trash"></i>
                  </span> 
                </a>
              </div>
            </td>
          </tr>
        <?php endforeach ?>
  
      </tbody>
    </table>
  </div>



  <div class="row">
    <div class="large-2 large-offset-10 columns">
      <a href="<?php echo base_url("index.php/products/create"); ?>"><i class="foundicon-add-doc">Crear Producto</i></a>
    </div>
  </div>




</div>