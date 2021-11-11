<?php ob_start(); ?>
	<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?= ROOT_URL;?>/public/images/portada1.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Bienvenidos al Hotel Carlton</h1>
	            <h2>Hotels &amp; Resorts</h2>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?= ROOT_URL;?>/public/images/portada2.jfif);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Disfruta de la experiencia</h1>
	            <h2>Ven y Visitanos</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-booking">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<form action="#" class="booking-form">
	        		<div class="row">
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Fecha Entrada</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Fecha Salida</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    				</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Habitación</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">Suite</option>
			                      <option value="">Family Room</option>
			                      <option value="">Deluxe Room</option>
			                      <option value="">Classic Room</option>
			                      <option value="">Superior Room</option>
			                      <option value="">Luxury Room</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Personas</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">1 Adult</option>
			                      <option value="">2 Adult</option>
			                      <option value="">3 Adult</option>
			                      <option value="">4 Adult</option>
			                      <option value="">5 Adult</option>
			                      <option value="">6 Adult</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <input type="submit" value="Disponibilidad" class="btn btn-primary py-3 px-4 align-self-stretch">
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>

	<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Atención 24h</h3>
                <p>Estamos a su disposición las 24 horas del día</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Servicio Restaurante</h3>
                <p>Disfrute de nuestro gran restaurante, con comida tipica de la zona</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Transporte</h3>
                <p>Nos ponemos a tu disposicón para ayudarte con los medios de transporte</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Spa Suites</h3>
                <p>Disfruta de nuestras suites con spas y desconecte en un ambiente calido</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nuestras habitaciones</h2>
          </div>
        </div>    		
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
    						<p><span class="price mr-2">120€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
    						<p><span class="price mr-2">20€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
    						<p><span class="price mr-2">150€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Classic Room</a></h3>
    						<p><span class="price mr-2">130€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-5.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
    						<p><span class="price mr-2">300€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?= ROOT_URL;?>/public/images/room-6.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
    						<p><span class="price mr-2">500€</span> <span class="per">por noche</span></p>
    						<hr>
    						<p class="pt-1"><a href="room-single.html" class="btn-custom">Ver Habitación <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?= ROOT_URL;?>/public/images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="50000">0</strong>
		                <span>Clientes Satisfechos</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="3000">0</strong>
		                <span>Habitaciones</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Personal</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Bodas</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?= ROOT_URL;?>/public/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Iñaki Willians</p>
		                    <span class="position">Invitados</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?= ROOT_URL;?>/public/images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Mariano Rajoy</p>
		                    <span class="position">Invitados</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?= ROOT_URL;?>/public/images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Iker Muniain</p>
		                    <span class="position">Invitados</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?= ROOT_URL;?>/public/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Dani Rovira</p>
		                    <span class="position">Invitados</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?= ROOT_URL;?>/public/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Bad bunny</p>
		                    <span class="position">Invitados</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Eventos Recientes</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?= ROOT_URL;?>/public/images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">Degustación gastronómica con los mejores chefs de España</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Feb 6, 2018</a></div>
                  <div><a href="#">Pedro</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 5</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?= ROOT_URL;?>/public/images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Visita a nuestra tierra de los mejores escaladores del mundo</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Mayo 5, 2020</a></div>
                  <div><a href="#">Juan</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 2</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?= ROOT_URL;?>/public/images/salonbodas.jpeg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Celebración por todo lo alto de la boda de Iñigo Urkullu</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Junio 16, 2014</a></div>
                  <div><a href="#">Carlos</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 1</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?= ROOT_URL;?>/public/images/bodas2.jfif');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Comida benefica por el cancer de mama</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Enero 21, 2021</a></div>
                  <div><a href="#">Sofia</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 4</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $content = ob_get_clean() ?>
	<?php include 'app/views/layout.html.php' ?>