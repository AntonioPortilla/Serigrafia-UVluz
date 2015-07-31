<div class="container">
  <div class="row">
    <div id="indexCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#indexCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#indexCarousel" data-slide-to="1"></li>
        <li data-target="#indexCarousel" data-slide-to="2"></li>
        <li data-target="#indexCarousel" data-slide-to="3"></li>        
      </ol>      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner1.jpg" alt="logo UVluz">
          <div class="container">
            <div class="carousel-caption">
              <span class="descripcion">Alta calidad para <br>tu servicio</span>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner2.jpg" alt="logo UVluz">
          <div class="container">
            <div class="carousel-caption">
              <span class="descripcion">Alta calidad para <br>tu servicio</span>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner3.jpg" alt="logo UVluz">
          <div class="container">
            <div class="carousel-caption">
              <span class="descripcion">Alta calidad para <br>tu servicio</span>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner4.jpg" alt="logo UVluz">
          <div class="container">
            <div class="carousel-caption">
              <span class="descripcion">Alta calidad para <br>tu servicio</span>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#indexCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
      </a>
      <a class="right carousel-control" href="#indexCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
          <textarea class="form-control" rows="6" id="comentario" name="comentario"></textarea>
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


