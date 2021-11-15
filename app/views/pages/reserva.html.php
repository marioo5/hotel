<?php ob_start(); ?>
<div class="hero-wrap" style="background-image: url('<?= ROOT_URL;?>/public/images/reserva.jpeg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= ROOT_URL;?>">Home</a></span> <span class="mr-2"><a href="blog.html">Reserva</a></span></p>
          <h1 class="mb-4 bread">Reservar</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate order-md-last">
        <h2 class="mb-3">Junior Suite</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
        <p>
          <img src="<?= ROOT_URL;?>/public/images/room-4.jpg" alt="" class="img-fluid">
        </p>
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
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Servicios</h3>
            <li><a href="#">Wifi <span class="icon-wifi"></span></a></li>
            <li><a href="#">Aire Acondicionado </a></li>
            <li><a href="#">Televisión</a></li>
            <li><a href="#">Cafetera</a></li>
            <li><a href="#">Minibar </span></a></li>
            <li><a href="#">Baño Privado </a></li>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Otras habitaciones</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/room-1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Habitación especial</a></h3>
              <div class="meta">
                <div><span class="icon-person"></span> 2 Personas</div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/room-2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Habitación Estandar</a></h3>
              <div class="meta">
                <div><span class="icon-person"></span> 2 Personas</div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/room-3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Habitación Superior</a></h3>
              <div class="meta">
                <div><span class="icon-person"></span> 2 Personas</div>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Incluye</h3>
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">sofa</a>
            <a href="#" class="tag-cloud-link">armario</a>
            <a href="#" class="tag-cloud-link">radio</a>
            <a href="#" class="tag-cloud-link">calefacción</a>
            <a href="#" class="tag-cloud-link">bebidas</a>
            <a href="#" class="tag-cloud-link">perchero</a>
            <a href="#" class="tag-cloud-link">teléfono</a>
            <a href="#" class="tag-cloud-link">secador</a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section> <!-- .section -->

<?php $content = ob_get_clean() ?>
<?php include 'app/views/layout.html.php' ?>