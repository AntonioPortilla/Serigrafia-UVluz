<div class="container">
  <div class="row">
    <div id="contCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/principal.jpg" alt="logo UVluz">
          <div class="container">
            <div class="carousel-caption">
              <span class="descripcion">El valor de una idea radica <br>en el uso de la misma</span>
            </div>
          </div>
        </div>
       </div>
    </div>      
  </div>
</div>
<div class="container nosotros">
  <div class="row">
    <div class="col-lg-12"> 
      <h1 class="red">CONTACTO</h1><br>
      <p>
        Muchas gracias por ponerte en contacto con Serigrafía UVLUZ
      </p>
    </div>
  </div>  
  <div class="row contacto">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">            
      <form id="formContact">
        <div class="form-group form-group-sm">
          <label for="nombres">NOMBRES Y APELLIDOS</label>
          <input class="form-control" type="text" id="nombres" name="nombres">
        </div>
        <div class="form-group form-group-sm">
          <label for="correo">CORREO (*)</label>
          <input type="email" class="form-control" id="correo" name="correo" required>
        </div>            
        <div class="form-group form-group-sm">
          <label for="telf">TELÉFONO</label>
          <input type="tel" class="form-control" id="telf" name="telefono" minlength="7">
        </div>    
        <div class="form-group form-group-sm">
          <label for="comentario">COMENTARIO</label>
          <textarea class="form-control" rows="6" id="comentario" name="comentario" required></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-blue center" aria-label="Left Align">
          ENVIAR
        </button>
      </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
      <img src="<?php echo IMAGE_PATH; ?>/contacto.jpg" alt="contacto" width="95%" class="center">      
    </div>    
  </div>
</div>


