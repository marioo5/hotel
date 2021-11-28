<?php ob_start(); ?>
<div class="hero-wrap" style="background-image: url('<?= ROOT_URL;?>/public/images/blog-s.jpeg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= ROOT_URL;?>">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> </p>
          <h1 class="mb-4 bread">Publicación</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate order-md-last">
        <h2 class="mb-3"><?= $data['posts']->title; ?></h2>
        <p><?= $data['posts']->text; ?></p>
        <p>
          <img src="data:img/jpeg;base64,<?php echo base64_encode($data['posts']->files->filedata); ?>" alt="" class="img-fluid">
        </p>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link"><?= $data['categories']->name; ?></a>
          </div>
        </div>
        
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio align-self-md-center mr-4">
            <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc align-self-md-center">
            <h3><?= $data['author']->name; ?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>


        <div class="pt-5 mt-5">
          <h3 class="mb-5">6 Comentarios</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard bio">
                <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Diciembre 7, 2018</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Contestar</a></p>
              </div>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Diciembre 7, 2018</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Contestar</a></p>
              </div>

              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">Diciembre 7, 2018</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Contestar</a></p>
                  </div>


                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">Diciembre 7, 2018</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Contestar</a></p>
                      </div>

                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>John Doe</h3>
                              <div class="meta">Diciembre 7, 2018</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Contestar</a></p>
                            </div>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="comment">
              <div class="vcard bio">
                <img src="<?= ROOT_URL;?>/public/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>John Doe</h3>
                <div class="meta">Diciembre 7, 2018</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Contestar</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->
          
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Deja un comentario</h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Nombre *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Comentar" class="btn py-3 px-4 btn-primary">
              </div>

            </form>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Categorias</h3>
            <li><a href="#">Comida <span>(12)</span></a></li>
            <li><a href="#">Deporte <span>(22)</span></a></li>
            <li><a href="#">Eventos <span>(37)</span></a></li>
            <li><a href="#">Famosos <span>(42)</span></a></li>
            <li><a href="#">Vinos <span>(14)</span></a></li>
            <li><a href="#">Reuniones <span>(140)</span></a></li>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blog</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Diciembre 7, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Pedro</a></div>
                <div><a href="#"><span class="icon-chat"></span> 10</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/image_2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Phasellus sit amet ullamcorper nisl. Integer tempor eget tellus nec ultricies</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Diciembre 7, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Juan</a></div>
                <div><a href="#"><span class="icon-chat"></span> 9</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?= ROOT_URL;?>/public/images/image_3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Ut condimentum consequat dignissim</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Diciembre 7, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 20</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section> <!-- .section -->

<?php $content = ob_get_clean() ?>
<?php include 'app/views/layout.html.php' ?>