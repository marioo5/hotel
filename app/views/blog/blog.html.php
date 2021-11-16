<?php ob_start(); ?>
<div class="hero-wrap" style="background-image: url('<?= ROOT_URL;?>/public/images/blog.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= ROOT_URL;?>">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-4 bread">Blog</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
    <?php foreach($data['blogs'] as $item) : ?>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('data:img/jpg;base64,<?php echo base64_encode($item->files->filedata); ?>');">
          </a>
          <div class="text mt-3 d-block">
            <h3 class="heading mt-3"><a href="#"><?php echo $item['title']; ?></a></h3>
            <div class="meta mb-3">
              <div><a href="#"><?php echo $item['date_published']; ?></a></div>
              <div><a href="#"><?php echo $item['publisher']; ?></a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 2</a></div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ; ?>

    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <?php for($data['page'] = 1; $data['page']<= $data['numpages']; $data['page']++) {
              echo '<li><a href ="index.php?page=' . $data['page'] . '">' . $data['page'] . ' </a></li>';
            }
            ?>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $content = ob_get_clean() ?>
<?php include 'app/views/layout.html.php' ?>