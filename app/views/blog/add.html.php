<?php ob_start(); ?>
<div class="hero-wrap" style="background-image: url('<?= ROOT_URL;?>/public/images/reserva.jpeg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= ROOT_URL;?>">Home</a></span> <span class="mr-2"><a href="<?= ROOT_URL;?>/blog">Blog</a></span></p>
          <h1 class="mb-4 bread">Crear Nuevo Posts</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate order-md-last">
        <div class="pt-5 mt-5">
          <!-- END comment-list -->
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Reserva</h3>
            <form action="#" class="p-5 bg-light">
              <h4>Datos Personales</h4>
              <div class="form-group">
                <label for="name">Nombre *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Documento de Identidad *</label>
                <input type="text" class="form-control" id="website">
              </div>

              <div class="form-group">
                <label for="name">Número de personas *</label>
                <select name="personas" id="personas" class="form-control">
                  <option >0 personas</option>
                  <option value="1">1 persona</option>
                  <option value="2">2 personas</option>
                  <option value="3">3 personas</option>
                  <option value="4">4 personas</option>
                </select>
              </div>

              <div class="form-group">
                <label for="telefono">Teléfono *</label>
                <input type="tel" class="form-control" id="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
              </div>

              <div class="form-group">
                <label for="message">Observaciones</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <h4>Datos de la tarjeta</h4>

              <div class="form-group">
                <label for="name">Tipo tarjeta *</label>
                <select name="tarjeta" id="tarjeta" class="form-control">
                  <option >Elije el tipo de trajeta ...</option>
                  <option value="visa">VISA</option>
                  <option value="master">MASTER CARD</option>
                  <option value="euro">EURO 6000</option>
                </select>
              </div>

              <div class="form-group">
                <label for="name">Número de la tarjeta *</label>
                <input type="text" class="form-control" id="name">
              </div>

              <div class="form-group">
                <label for="name">CVV *</label>
                <input type="text" class="form-control" id="name">
              </div>

              <div class="form-group">
                <label for="fecha">Fecha Caducidad *</label>
                <input type="month" class="form-control" id="mes">
              </div>

              <div class="form-group">
                <input type="submit" value="Reservar" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
     
    </div>
  </div>
</section> <!-- .section -->

<?php $content = ob_get_clean() ?>
<?php include 'app/views/layout.html.php' ?>