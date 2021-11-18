<?php ob_start(); ?>
<?php $form = new FormHelper(); ?>
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
            <h3 class="mb-5">Crear un Post</h3>
            <form action="<?= ROOT_URL;?>/posts/add" method="post" enctype="multipart/form-data" class="p-5 bg-light">
              <div class="form-group">
                <label for="title">Title</label>
                <?= $form->input('text', ['name' => 'title', 'class' => 'form-control']) ?>
              </div>
              <div class="form-group">
                <label for="website">Message</label>
                <?= $form->textarea(['name' => 'text', 'class' => 'form-control', 'cols' => '30', 'rows' => '10']) ?>
              </div>

              <div class="form-group">
                <label for="category">Categories</label>
                <select name="category" id="category" class="form-control">
                <?php 
                foreach($data['categories'] as $key => $item) : ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                  <?php endforeach ; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="image">Image</label>
                <br>
                <?= $form->input('file', ['name' => 'cover']) ?>
              </div>

              <div class="form-group">
                <input type="submit" value="Crear" class="btn py-3 px-4 btn-primary">
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