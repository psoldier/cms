<div class="row">
  <div class="small-6 large-centered columns">
    <?php echo isset($error_login)?"Error en el Email o Contrase&ntilde;a":"";?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('login') ?>
    <form method="post" action="#">
    <fieldset>
      <legend>Ingresar</legend>
      <div class="row collapse">
        <div class="small-3 large-3 columns">
          <span class="prefix">Email</span>
        </div>
        <div class="small-9 large-9 columns">
          <input id="user" name="email" type="email" value="<?= set_value("email") ?>" required/>
        </div>
      </div>
      <div class="row collapse">
        <div class="small-3 large-3 columns">
          <span class="prefix">Contrase&ntilde;a</span>
        </div>
        <div class="small-9 large-9 columns">
          <input id="password" name="password" type="password" value="<?= set_value("password") ?>" required/>
        </div>
      </div>

      <div class="small-12 large-centered columns">
        <input type="submit" class="button postfix" value="Ingresar" />
      </div>

    </fieldset>
    </form>
  </div>


</div>