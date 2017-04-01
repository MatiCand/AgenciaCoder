<!DOCTYPE html>
<html>
    <head>
        <title>AgenciaCoder &mdash; Agencia de Marketing Digital</title>
        <meta name="description" content=" Agencia de Marketing Digital">
        <meta name="keywords" content="Agencia, Marketing Digital, seo, sem, redes sociales, adwords, analytics, branding, diseño web, email marketing">
        <meta charset="utf-8">
        <meta name="author" content="Agencia Coder">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/animations.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">


        <!-- Color Schemes :: Uncomment one for apply :: -->
        <!-- <link rel="stylesheet" href="css/colors/orange.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/green.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/cyan.css"> -->
        <link rel="stylesheet" href="css/colors/azure.css">
        <!-- <link rel="stylesheet" href="css/colors/blue.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/blue-extra.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/purple-extra.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/brown.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/brown-extra.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/red-extra.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/pink.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/black.css"> -->

    </head>
    <body class="appear-animate">

        {{-- cartel de mensaje enviado --}}
        @if (Session::has('message'))
          <div class="alert-message alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('message') }}
            <strong>Muchas Gracias!!</strong>
          </div>
        @endif

        <!-- Page Loader -->
        <div class="page-loader">
            <b class="spinner">Loading...</b>
        </div>
        <!-- End Page Loader -->

        <!-- Page Wrap -->
        <div class="page" id="top">


            <!-- Navigation panel -->
            <nav class="main-nav dark stick-fixed">
                <div class="container relative clearfix">

                  <!-- Logo ( * your text or image into link tag *) -->
                  <div class="nbc-logo-wrap local-scroll">
                      <a href="{{'/'}}" class="nbc-logo">
                          <!-- <img src="images/logo-white.png" width="80" height="27" alt="" /> -->
                          Agencia Coder
                      </a>
                  </div>

					<div class="mobile-nav"><i class="fa fa-bars"></i></div>

					<!-- Main Menu -->
            		<div class="inner-nav desktop-nav">
                    	<ul class="clearlist scroll-nav local-scroll">
                        <li>
                            <a href="{{'/'}}">Inicio</a>
                        </li>
                        <li>
                            <a href="#contact">Contacto</a>
                        </li>
                      </ul>
                    </div>

                </div>
            </nav>
            <!-- End Navigation panel -->


            <!-- Home Section -->
            <section class="page-section bg-dark-alfa-90" data-background="images/full-width-images/section-bg-24.jpg">
                <div class="container relative pt-40">

                    <div class="align-center">

                        <div class="big-icon">
                            <i class="fa fa-usd"></i>
                        </div>

                        <h3 class="section-title">Planes</h3>

                        <div class="section-heading">Los mejores precios para planes integrados</div>

                    </div>

                </div>
            </section>
            <!-- End Home Section -->

            <!-- Section -->
            <section class="page-section">
                <div class="container">

                    <!-- Pricing row -->
                        <div class="row multi-columns-row">

                            <!-- Pricing Item -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="pricing-item">
                                    <div class="pricing-item-inner">
                                        <div class="pricing-wrap">

											<!-- Icon (Simple-line-icons) -->
                                            <div class="pricing-icon">
                                                <i class="fa fa-paper-plane-o"></i>
                                            </div>

											<!-- Pricing Title -->
                                            <div class="pricing-title">
                                                inicio
                                            </div>

											<!-- Pricing Features -->
                                            <div class="pricing-features">
                                                <ul class="sf-list pr-list">
													<li>Página Web</li>
													<li>Hosting y Dominio <span class="planes">Gratis</span></li>
													<li>Chat</li>
                          <li>Seo Básico</li>
                          <li>Newsletter</li>
                          <li>Formulario de contacto</li>
                          <li>Redes Sociales</li>
                          <li>Mapa</li>
												</ul>
                                            </div>



											<div class="pricing-num">
                                                <sup>$</sup>4500
											</div>

											<div class="pr-per">
													única vez
											</div>

											<!-- Button -->
                                            <div class="pr-button">
                                                <a href="#contact" class="btn btn-mod">Contratar</a>
                                            </div>

										</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Pricing Item -->

							<!-- Pricing Item -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="pricing-item main">
                                    <div class="pricing-item-inner">
                                        <div class="pricing-wrap">

											<!-- Icon (Simple-line-icons) -->
                                            <div class="pricing-icon">
                                                <i class="fa fa-rocket"></i>
                                            </div>

											<!-- Pricing Title -->
                                            <div class="pricing-title">
                                                Emprendedor
                                            </div>

											<!-- Pricing Features -->
                                            <div class="pricing-features">
                                                <ul class="sf-list pr-list">

                          <li><span class="planes-incluye">incluye</span> plan Inicio</li>
													<li>Sitio web bonificado</li>
													<li>diseño de portada de redes sociales</li>
													<li>campañas google adwords</li>
													<li>campañas facebook ads</li>
													<li>300$ de regalo en adwords</li>
													<li>Soporte <span class="planes">Gratis</span></li>
												</ul>
                                            </div>



											<div class="pricing-num">
                                                <sup>$</sup>2500
											</div>

											<div class="pr-per">
												por mes
											</div>


											<!-- Button -->
                                            <div class="pr-button">
                                                <a href="#contact" class="btn btn-mod">Contratar</a>
                                            </div>

										</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Pricing Item -->

							<!-- Pricing Item -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="pricing-item">
                                    <div class="pricing-item-inner">
                                        <div class="pricing-wrap">

											<!-- Icon (Simple-line-icons) -->
                                            <div class="pricing-icon">
                                                <i class="fa fa-desktop"></i>
                                            </div>

											<!-- Pricing Title -->
                                            <div class="pricing-title">
                                                Empresa
                                            </div>

											<!-- Pricing Features -->
                                            <div class="pricing-features">
                                                <ul class="sf-list pr-list">
                          <li><span class="planes-incluye">incluye</span> plan emprendedor</li>
													<li>Sitio Web bonificado</li>
													<li>Administramos tu fanpage</li>
													<li>12 publicaciones al mes</li>
													<li>Estadisticas y reportes</li>
                          <li>email marketing</li>
													<li>2 hora de Administración de interacciones</li>
													<li>Soporte <span class="planes">Gratis</span></li>
												</ul>
                                            </div>



											<div class="pricing-num">
                                                <sup>$</sup>5500
											</div>

											<div class="pr-per">
												por mes
											</div>


											<!-- Button -->
                                            <div class="pr-button">
                                                <a href="#contact" class="btn btn-mod">Contratar</a>
                                            </div>

										</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Pricing Item -->

						</div>
						<!-- End Pricing row -->

                </div>
            </section>
            <!-- End Section -->

            <hr />


            <!-- Newsletter Section -->
            <section class="small-section bg-light-alfa" data-background="images/full-width-images/section-bg-7.jpg">
              <div class="container relative">

                <!-- Begin MailChimp Signup Form *****************-->
                <form action="//AgenciaCoder.us15.list-manage.com/subscribe/post?u=ece7bec12b984d31600df2840&amp;id=6d0a62ff88" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form validate" target="_blank" novalidate>

                  <div class="row">
                    <div class="col-md-6 col-lg-4 col-lg-offset-2 banner-text">
                      <!-- Text -->
                      <div class="newsletter-label">
                        Suscribirse al newsletter
                      </div>
                      <input type="email" value="" name="EMAIL" class="newsletter-field form-control email" id="mce-EMAIL" placeholder="Ingresa tu Email" type="email" pattern=".{5,100}"   required>
                    </div>

                    <div class="col-md-6 col-lg-4 banner-button pt-10 pt-xs-0">
                      <input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="btn btn-mod btn-large button">
                    </div>

                  </div>
                </form>
                <!--End MailChimp Signup Form ******************-->

              </div>
            </section>
            <!-- End Newsletter Section -->


            <!-- Contact Section -->
            <section class="page-section bg-scroll bg-dark-alfa-90" data-background="images/full-width-images/section-bg-8.jpg" id="contact">
                <div class="container relative">

                    <div class="row">

                        <!-- Contact Info -->
                        <div class="col-md-4">

                            <!-- Phone -->
                            <div class="contact-item mb-40 mb-md-20">

                                <!-- Icon -->
                                <div class="ci-icon">
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="ci-title">Teléfono</div>

                                <div class="ci-phone">54 11 3853-0655</div>

                            </div>
                            <!-- End Phone -->

                            <!-- Address -->
                            <div class="contact-item mb-40 mb-md-20">

                                <!-- Icon -->
                                <div class="ci-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>

                                <div class="ci-title">Dirección</div>

                                <div class="ci-text">Vicente López</div>

                            </div>
                            <!-- End Address -->

                            <!-- Email -->
                            <div class="contact-item mb-md-40">

                                <!-- Icon -->
                                <div class="ci-icon">
                                    <a href="mailto:contacto@agenciacoder.com">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div>

                                <div class="ci-title">Di Hola..!</div>

                                <div class="ci-text"><a href="mailto:contacto@agenciacoder.com">contacto@agenciacoder.com</a></div>

                            </div>
                            <!-- End Email -->

                        </div>
                        <!-- End Contact Info -->


                        <div class="col-md-7 col-md-offset-1">
                            <!-- Contact Form -->
                            {!! Form::open(['route'=>'mail.store','method' => 'POST','class' => 'form contact-form','id' => 'contact-form']) !!}

                            <div class="clearfix mb-20 mb-xs-0">
                              <div class="cf-left-col">

                                <!-- Name -->
                                <div class="form-group">
                                  {!! Form::text('name',null,['placeholder' => 'Nombre', 'class' => 'ci-field form-control', 'required']) !!}
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                  {!! Form::text('email',null,['placeholder' => 'Email', 'class' => 'ci-field form-control', 'required']) !!}
                                </div>

                              </div>
                              <div class="cf-right-col">

                                <!-- Message -->
                                <div class="form-group">
                                  <label for="message">Mensaje</label>
                                  {!! Form::textarea('mensaje',null,['class' => 'ci-area form-control', 'required' ]) !!}
                                </div>

                              </div>
                            </div>

                            {!! Form::submit('ENVIAR CONSULTA',['class' => 'submit_btn btn btn-mod btn-large btn-full ci-btn' ]) !!}

                            <div id="result"></div>

                            {!! Form::close() !!}
                            <!-- End Contact Form -->

                        </div>

                    </div>

                </div>
            </section>
            <!-- End Contact Section -->

            <!-- Bottom menu -->
            <div class="bot-menu local-scroll">

                <!-- See Map -->
                <a href="#" class="bot-menu-item animate-init" data-anim-type="fade-in-right" data-anim-delay="0" id="see-map">
                    <span class="bot-menu-icon">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    Ver Mapa
                </a>
                <!-- End See Map -->

                <!-- Scroll Up -->
                <a href="#top" class="bot-menu-item animate-init" data-anim-type="fade-in-left" data-anim-delay="0">
                    <span class="bot-menu-icon">
                        <i class="fa fa-arrow-circle-o-up"></i>
                    </span>
                    Arriba
                </a>
                <!-- End Scroll Up -->

            </div>
            <!-- End Bottom menu -->

            <!-- Google Map -->
            <div class="google-map">
                <div data-address="Vicente López, BA, Argentina" data-color="#000000" id="map-canvas"></div>
            </div>
            <!-- End Google Map -->


            <!-- Footer -->
            <footer class="small-section bg-dark footer">
                <div class="container animate-init" data-anim-type="bounce-in-up" data-anim-delay="0">

                    <!-- Footer Text -->
                    <div class="footer-text">

                        <!-- Copyright -->
                        <div class="footer-copy">
                            <a href="http://agenciacoder.com" target="_blank">&copy; Agencia Coder <span class="number">2015 - 2017</span></a>.
                        </div>
                        <!-- End Copyright -->

                        <div class="footer-made">
                            Hecho con mucho <span class="serif">amor</span>
                        </div>

                    </div>
                    <!-- End Footer Text -->

                    <!-- Social Links -->
                    <div class="footer-social-links">
                        <div class="social-links tooltip-bot">
                            <a href="https://www.facebook.com/AgenciaCoder/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/AgenciaCoder/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/agenciacoder/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://plus.google.com/u/0/112262369944014266904" target="_blank"><i class="fa fa-google"></i></a>
                            <a href="https://www.youtube.com/channel/UCuMgNE9QhdfHVs_iEQEIPKw" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="mailto:contacto@agenciacoder.com" title="E-mail" target="_blank"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                    <!-- End Social Links -->

                 </div>
            </footer>
            <!-- End Foter -->


        </div>
        <!-- End Page Wrap -->




        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.ba-hashchange.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/animations.min.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    </body>
</html>
