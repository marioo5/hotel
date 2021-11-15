<?php ob_start(); ?>
<div class="hero-wrap" style="background-image: url('<?= ROOT_URL;?>/public/images/contacto.jpeg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= ROOT_URL;?>">Home</a></span> <span>Contacto</span></p>
          <h1 class="mb-4 bread">Contacta</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h3">Información de Contacto</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Dirección:</span> Plaza Federico Moyúa, 2, 48009 Bilbao, España</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Teléfono:</span> <a href="tel://1234567920">944 16 22 00</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Email:</span> <a href="mailto:carlton@aranzazu-hoteles.com">carlton@aranzazu-hoteles.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Tu nombre ...">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Tu email ...">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Asunto ...">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje ..."></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>

      <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>

<?php $content = ob_get_clean() ?>
<?php include 'app/views/layout.html.php' ?>