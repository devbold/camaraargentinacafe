<?php 
  $title = 'Conocenos';
?>
<?php include 'header.php'; ?>
  <section class='section-01 index'>
    <div class="container-fluid main-banner--height">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="banner-container">
                <div class="banner-txt">
                  <h2 class="banner-title">Contacto</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-banner full-black"></div>
        <div class="main-banner banner-12"></div>
      </div>
    </div>
  </section>  
  <section class="section-02">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="margintop30 visible-xs"></div>
          <div class="margintop60 hidden-xs"></div>
          <div class="title text-center">enviénos un mensaje</div>
          <p class="text-center">
            Envienos un mensaje y le responderemos a la brevedad
          </p>
          <div class="margintop20 visible-xs"></div>
          <div class="margintop40 hidden-xs"></div>
        </div>
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-12 text-left">

              <form method="POST" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                  <div class="col-xs-12 col-sm-6">     
                    <div class="form-group floating-label-form-group controls">
                      <input type="text" required class="form-control" placeholder="Nombre" id="name" data-validation-required-message="Por favor ingrese su nombre">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>
                <div class="control-group">
                  <div class="col-xs-12 col-sm-6">        
                    <div class="form-group floating-label-form-group controls">
                      <input type="email" required class="form-control" placeholder="Correo Electrónico" id="email" data-validation-required-message="Por favor ingrese su correo">
                      <p class="help-block text-danger"></p>
                    </div>     
                  </div>
                </div>
                <div class="control-group">
                  <div class="col-xs-12">        
                    <div class="form-group floating-label-form-group controls">
                      <input type="text" class="form-control" placeholder="Asunto" id="subject" data-validation-required-message="Por favor ingrese su asunto">
                      <p class="help-block text-danger"></p>
                    </div>                
                  </div>
                </div>
                <div class="control-group">
                  <div class="col-xs-12">        
                    <div class="form-group floating-label-form-group controls">
                      <textarea type="text" required class="form-control" placeholder="Mensaje" id="message" data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                      <p class="help-block text-danger"></p>
                    </div>   
                  </div>
                </div>   
                <div class="col-xs-12">
                  <div class="col-xs-12">
                    <div class="success"></div>
                  </div>
                </div>  
                <div class="col-xs-12">
                  <div class="form-group">
                    <button id='btnSubmit' type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                  </div>    
                </div>     
                <div class="clearfix"></div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="margintop30 visible-xs"></div>
    <div class="margintop60 hidden-xs"></div>

  </section>

<?php include 'footer.php'; ?>




