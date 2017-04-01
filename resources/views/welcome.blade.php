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
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css"> 

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/animations.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/YTPlayer.css">
        <link rel="stylesheet" href="css/simpletextrotator.css">


        <!-- Color Schemes :: Uncomment one for apply :: -->
         <link rel="stylesheet" href="css/colors/orange.css">
        <!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/green.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/cyan.css"> -->
        {{-- <link rel="stylesheet" href="css/colors/azure.css"> --}}
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
        {{-- <div class="page-loader">
            <b class="spinner">Loading...</b>
        </div> --}}
        <!-- End Page Loader -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            <!-- Home Section -->
            <section class="home-section bg-dark-alfa-50" data-background="images/video-placeholder.jpg" id="home">
                <div class="js-height-full">

                    <!-- Video BG Init..........bO4LRzv19_k  |  SdDudrd_828-->
                    <div class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=bO4LRzv19_k',containment:'#home',autoPlay:true, showControls:false, showYTLogo: false, mute:true, loop:true, startAt:20, opacity:1}">
                    </div>
                     <!-- End Video BG Init -->

                    <!-- Home Page Content -->
                    <div class="home-content container">
                        <div class="home-text">
                            <div class="container animate-init" data-anim-type="fade-in-up-big" data-anim-delay="100">

                                <!-- Headings -->

                                <div class="hs-line-8 mb-20">
                                    Coder | <strong>Agencia de Marketing Digital</strong>
                                </div>

                                <div class="hs-line-9 mb-30">
                                    <span class="text-rotate">
                                        Diseño de Páginas Web,
                                        Gestión de Redes Sociales,
                                        Campañas de Email Marketing
                                    </span>
                                </div>

                                <div class="hs-line-10">
                                    Posicionamiento SEO   <span>/</span>   Google Adwords   <span>/</span>   Facebook Ads   <span>/</span>   Tienda Online
                                </div>

                                <!-- End Headings -->

                            </div>
                        </div>
                    </div>
                    <!-- End Home Page Content -->

                    <!-- Scroll Down -->
                    <div class="local-scroll">
                        <a href="#about" class="scroll-down static"><i class="fa fa-5x fa-angle-down"></i></a>
                    </div>
                    <!-- End Scroll Down -->

                </div>
            </section>
            <!-- End Home Section -->

            <!-- Navigation panel -->
            <div class="nav-bar-compact clearfix">

                <!-- Logo ( * your text or image into link tag *) -->
                <div class="nbc-logo-wrap local-scroll">
                    <a href="#top" class="nbc-logo">
                        <!-- <img src="images/logo-white.png" width="80" height="27" alt="" /> -->
                        Agencia Coder
                    </a>
                </div>

                <!-- Menu Button -->
                <div class="nbc-menu-button">
                    <i class="nbc-menu-icon"></i>
                </div>

                <!-- Menu Links -->
                <nav class="nbc-menu-wrap">
                    <ul class="nbc-menu-links local-scroll">
                        <li>
                            <a href="#home">Inicio</a>
                        </li>
                        <li>
                            <a href="#about">Sobre Nosotros</a>
                        </li>
                        <li>
                            <a href="#process">Procesos</a>
                        </li>
                        <li>
                            <a href="#services">Servicios</a>
                        </li>
                        {{-- <li>
                            <a href="#team">Equipo</a>
                        </li> --}}
                        <li>
                            <a href="#portfolio">Trabajos</a>
                        </li>
                        <li>
                            <a href="{{'planes'}}">Planes</a>
                        </li>
                        {{-- <li>
                            <a href="#news">Noticias</a>
                        </li> --}}
                        <li>
                            <a href="#contact">Contacto</a>
                        </li>


                    </ul>

                    <!-- Social Links -->
                    <div class="nbc-social-links">
                        <a href="https://www.facebook.com/AgenciaCoder/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/AgenciaCoder/" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/agenciacoder/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://plus.google.com/u/0/112262369944014266904" target="_blank"><i class="fa fa-google"></i></a>
                        <a href="https://www.youtube.com/channel/UCuMgNE9QhdfHVs_iEQEIPKw" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                    <!-- End Social Links -->

                </nav>
            </div>
            <!-- End Navigation panel -->

            <!-- About Us Section -->
            <section class="page-section bg-dark" id="about">
                <div class="container relative">

                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            <div class="section-title">
                                Sobre Nosotros<span class="st-point">.</span>
                            </div>
                            <h2 class="section-heading">Somos una agencia de Marketing Digital ubicada en Vicente López, Buenos Aires</h2>
                            <div class="section-line mb-60 mb-xxs-30"></div>
                        </div>
                    </div>
                    <!-- End Section Headings -->
                    <!-- About -->
                    <div class="tab-pane fade in active" id="one">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                          <div class="section-text">
                            Ayudamos a profesionales, emprendedores y startups a diseñar experiencias a través de la estrategia, tecnología, desarrollo de marca, diseño gráfico, diseño de páginas web, coaching digital en redes sociales, SEM (campañas en Google search y display) y SEO (posicionamiento orgánico en Google) entre otros..
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Section About -->

                  </div>
              </section>
              <!-- End About Us Section -->


              <!-- Process Section -->
              <section class="page-section bg-gray" id="process">
                  <div class="container relative">
                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            <div class="section-title">
                                Procesos<span class="st-point">.</span>
                            </div>
                            <h2 class="section-heading">Cómo trabajamos?</h2>
                            <div class="section-line mb-60 mb-xxs-30"></div>
                        </div>
                    </div>
                    <!-- End Section Headings -->

                    <!-- Process -->
                    <div class="tab-pane fade in active" id="one">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                          <div class="section-text">
                            Nos reunimos, nos comunicamos, establecemos expectativas y trabajamos juntos como un equipo. Nuestro proceso es transparente y dinámico, por lo que siempre sabrá cuándo, cómo y que estamos haciendo.
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Section Process -->

                    <!-- Process -->
                    <div class="tab-pane fade in active" id="one">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                                <div class="section-text">
                                  <!-- Process Item -->
                                  <div class="benefit-item">
                                      <div class="benefit-number">
                                          1
                                      </div>
                                      <div class="benefit-icon">
                                          <span class="icon-trophy"></span>
                                      </div>
                                      <h3 class="benefit-title">Reunirse</h3>
                                      <div class="benefits-descr">
                                          Comenzamos cada proyecto con una fase de descubrimiento, donde aprendemos acerca de sus necesidades y objetivos, esperanzas y sueños. Como agencia de marketing, nos tomamos el tiempo para conocerte, tu visión, competidores, estrategia e inspiración.
                                      </div>
                                  </div>
                                  <!-- End Process Item -->

                                  <!-- Process Item -->
                                  <div class="benefit-item">
                                      <div class="benefit-number">
                                          2
                                      </div>
                                      <div class="benefit-icon">
                                          <span class="icon-bubbles"></span>
                                      </div>
                                      <h3 class="benefit-title">Arte</h3>
                                      <div class="benefits-descr">
                                          Traducimos las ideas en imágenes visuales. Decidimos sobre conceptos de diseño, características, usabilidad y estrategias de marketing. Al final de esta fase, recibirá un plan detallado detallando cómo se ejecutará su proyecto.
                                      </div>
                                  </div>
                                  <!-- End Process Item -->

                                  <!-- Process Item -->
                                  <div class="benefit-item">
                                      <div class="benefit-number">
                                          3
                                      </div>
                                      <div class="benefit-icon">
                                          <span class="icon-screen-desktop"></span>
                                      </div>
                                      <h3 class="benefit-title">Lanzamiento</h3>
                                      <div class="benefits-descr">
                                          Las maquetas de diseño se convierten en una entidad completamente funcional. Utilizamos las últimas técnicas de programación para asegurar que su proyecto se construya de forma fiable y segura. Construimos cada proyecto desde cero, basado en sus necesidades.
                                      </div>
                                  </div>
                                  <!-- End Process Item -->

                                  <!-- Process Item -->
                                  <div class="benefit-item">
                                      <div class="benefit-number">
                                          4
                                      </div>
                                      <div class="benefit-icon">
                                          <span class="icon-rocket"></span>
                                      </div>
                                      <h3 class="benefit-title">Optimizar</h3>
                                      <div class="benefits-descr">
                                          Medimos el desempeño, analizamos, optimizamos y sugerimos mejoras continuas. Aprovechamos sus datos para darle una visión de nuevas oportunidades, mirando las tendencias para ir más allá de lo que existe y hacia el futuro de lo que se puede imaginar.
                                      </div>
                                  </div>
                                  <!-- End Process Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Process -->




                    <!-- Devices Image -->
                    <div class="section-bot-image animate-init slow-mo" data-anim-type="flip-in-bottom-front" data-anim-delay="0">
                        <img src="images/design.png" alt="" />
                    </div>
                    <!-- End Devices Image -->

                </div>
            </section>
            <!-- End About Us Section -->

            <!-- Some Facts Section -->
            <section class="page-section bg-dark" id="counts">
                <div class="container relative">

                    <!-- Counters -->
                    <div class="row">

                        <!-- Counter Item -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="count-number">
                                32
                            </div>
                            <div class="count-descr">
                                <i class="fa fa-heart"></i>
                                <span class="count-title white">CLIENTES FELICES</span>
                            </div>
                        </div>
                        <!-- End Counter Item -->

                        <!-- Counter Item -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="count-number">
                                326
                            </div>
                            <div class="count-descr">
                                <i class="fa fa-lightbulb-o"></i>
                                <span class="count-title white">HORAS SIN DORMIR </span>
                            </div>
                        </div>
                        <!-- End Counter Item -->

                        <!-- Counter Item -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="count-number">
                                184
                            </div>
                            <div class="count-descr">
                                <i class="fa fa-coffee"></i>
                                <span class="count-title white">ENERGIZANTES</span>
                            </div>
                        </div>
                        <!-- End Counter Item -->

                        <!-- Counter Item -->
                        <div class="col-xs-6 col-sm-3">
                            <div class="count-number">
                                602933
                            </div>
                            <div class="count-descr">
                                <i class="fa fa-magic"></i>
                                <span class="count-title white">LINEAS DE CÓDIGO</span>
                            </div>
                        </div>
                        <!-- End Counter Item -->

                    </div>
                    <!-- End Counters -->

                </div>
            </section>
            <!-- End Some Facts Section -->

            <!-- Services Section -->
            <section class="split-section bg-scroll bg-dark-alfa-50" data-background="images/full-width-images/section-bg-26.png"  id="services">
                <div class="clearfix relative">
                    <!-- Section Headings -->
                    <div class="split-section-headings animate-init"  data-anim-type="fade-in-up" data-anim-delay="100">
                        <div class="ssh-table">
                            <div class="ssh-cell pt-140 pt-sm-70 pt-xs-50 pb-140 pb-sm-70 pb-xs-50">
                                <div class="section-title white">
                                    Servicios<span class="st-point">.</span>
                                </div>
                                <h2 class="section-heading white">Ofrecemos las mejores soluciones digitales</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End Section Headings -->

                    <!-- Section Content -->
                    <div class="split-section-content service-grid clearfix">

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <h3 class="service-title">POSICIONAMIENTO EN BUSCADORES (SEO)</h3>
                                    </div>
                                    <div class="service-descr">
                                        Optimizamos su sitio web para lograr mejorar su visibilidad en los resultados orgánicos de los diferentes buscadores.
                                        <div class="service-button mt-40 mt-md-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-screen-desktop"></span>
                                        </div>
                                        <h3 class="service-title">DISEÑO Y DESARROLLO WEB</h3>
                                    </div>
                                    <div class="service-descr">
                                        Sabemos como hacer un diseño web atractivo, fácil de usar e intuitivo para sus clientes, que se adapte a los dispositivos móviles Y que genere buenos resultados.
                                        <div class="service-button mt-40 mt-md-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-puzzle"></span>
                                        </div>
                                        <h3 class="service-title">SOCIAL MEDIA MARKETING (SMM)</h3>
                                    </div>
                                    <div class="service-descr">
                                        Convertimos sus perfiles sociales en un nuevo canal de ventas, logrando de esta forma aumentar sus ventas y mejorar su Branding.
                                        <div class="service-button mt-40 mt-md-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-paper-plane"></span>
                                        </div>
                                        <h3 class="service-title">EMAIL MARKETING</h3>
                                    </div>
                                    <div class="service-descr">
                                        Comunicamos tus novedades de forma rápida y masiva a toda tu base de clientes y suscriptores. Servicios de diseño y envíos.
                                        <div class="service-button mt-40 mt-md-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-briefcase"></span>
                                        </div>
                                        <h3 class="service-title">GOOGLE ADWORDS - FACEBOOK ADS (SEM)</h3>
                                    </div>
                                    <div class="service-descr">
                                        Creamos y Optimizamos campañas en medios digitales, buscadores y redes sociales para obtener sólo los clicks que nos interesan.
                                        <div class="service-button mt-40 mt-md-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <!-- Service Item -->
                        <div class="service-item">
                            <div class="si-cell">
                                <div class="si-inner">
                                    <div class="service-intro">
                                        <div class="service-icon">
                                            <span class="icon-credit-card"></span>
                                        </div>
                                        <h3 class="service-title">E-COMMERCE</h3>
                                    </div>
                                    <div class="service-descr">
                                        Desarrollamos e implementamos soluciones de e-commerce para su empresa. Brindamos todos los servicios y soporte necesarios para que su canal de venta on line se desarrolle y obtenga los resultados esperados, aprovechando al maximo el canal digital.
                                        <div class="service-button mt-40 mt-lg-20 local-scroll">
                                            <a href="#contact" class="btn btn-mod btn-small btn-circle">Saber más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                    </div>
                    <!-- End Section Content -->
                </div>
            </section>
            <!-- End Services Section -->

            <!-- Team Section -->
            <section class="page-section" id="team">
                <div class="container relative">

                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                            <div class="section-title">
                                EQUIPO<span class="st-point">.</span>
                            </div>
                            <h2 class="section-heading">Somos un equipo con diferentes especialidades, pero un misma pasión: el Marketing Digital</h2>
                            <div class="section-line mb-60 mb-xxs-30"></div>
                        </div>
                    </div>
                    <!-- End Section Headings -->

                    <!-- Team Grid -->
                    {{-- <div class="team-grid"> --}}
                        <!-- Team Item -->
                        {{-- <div class="team-item animate-init" data-anim-type="fade-in" data-anim-delay="100">
                            <div class="team-item-image">
                                <img src="images/team/team-1.jpg" alt="" />
                                <div class="team-item-detail">
                                    <h4 class="serif">Hello people!</h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam.
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    John Thomson
                                </div>
                                <div class="team-item-role">
                                    Executive Director
                                </div>
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Team Item -->

                        <!-- Team Item -->
                        {{-- <div class="team-item animate-init" data-anim-type="fade-in" data-anim-delay="200">
                            <div class="team-item-image">
                                <img src="images/team/team-2.jpg" alt="" />
                                <div class="team-item-detail">
                                    <h4 class="serif">Nice to meet</h4>
                                    Lorem ipsum dolor sit amet, consectetur lacus, a&nbsp;iaculis diam.
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    Mark Anderson
                                </div>
                                <div class="team-item-role">
                                    Senior Designer
                                </div>
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Team Item -->

                        <!-- Team Item -->
                        {{-- <div class="team-item animate-init" data-anim-type="fade-in" data-anim-delay="300">
                            <div class="team-item-image">
                                <img src="images/team/team-3.jpg" alt="" />
                                <div class="team-item-detail">
                                    <h4 class="serif">Woof Woof</h4>
                                    Curabitur eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam.
                                </div>
                            </div>
                            <div class="team-item-descr">
                                <div class="team-item-name">
                                    Snoopy Doggy
                                </div>
                                <div class="team-item-role">
                                    Security
                                </div>
                                <div class="team-social-links">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Team Item -->

                    {{-- </div> --}}
                    <!-- End Team Grid -->

                </div>
            </section>
            <!-- End Team Section -->


            <!-- Features Section -->
            <section class="page-section bg-scroll bg-dark-alfa-70" data-background="images/full-width-images/section-bg-23.jpg">
                <div class="container relative">

                    <!-- Features Grid -->
                    <div class="item-carousel owl-carousel animate-init" data-anim-type="bounce-in-right-large" data-anim-delay="200">

                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-ghost"></span>
                            </div>
                            <div class="features-title">
                                Somos Creativos
                            </div>
                            <div class="features-descr">
                                Las mejores ideas para tu proyecto
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-rocket"></span>
                            </div>
                            <div class="features-title">
                                Somos Puntuales
                            </div>
                            <div class="features-descr">
                                Hacemos las tareas a tiempo
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-magic-wand"></span>
                            </div>
                            <div class="features-title">
                                Tenemos magia
                            </div>
                            <div class="features-descr">
                                Amarás los resultados
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-heart"></span>
                            </div>
                            <div class="features-title">
                                Amor Amor Amor
                            </div>
                            <div class="features-descr">
                                Todos los proyectos son especiales
                            </div>
                        </div>
                        <!-- End Features Item -->

                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-energy"></span>
                            </div>
                            <div class="features-title">
                                Nos sobra energia
                            </div>
                            <div class="features-descr">
                                y es muy contagiosa
                            </div>
                        </div>
                        <!-- End Features Item -->


                        <!-- Features Item -->
                        <div class="features-item">
                            <div class="features-icon">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="features-title">
                                Somos los mejores
                            </div>
                            <div class="features-descr">
                                o aspiramos a serlo
                            </div>
                        </div>
                        <!-- End Features Item -->


                    </div>
                    <!-- Features Grid -->
                </div>
            </section>
            <!-- Features Section -->


            <!-- Alternative Services Section -->
            <section class="page-section bg-light-alfa">
                <div class="container relative">

                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

                            <div class="section-title">
                                Todos los Servicios<span class="st-point">.</span>
                            </div>

                            <h2 class="section-heading">Esta es una lista completa de los mejores servicios digitales</h2>

                            <div class="section-line mb-60 mb-xxs-30"></div>

                            <div class="section-text mb-60 mb-xxs-30">
                                Contacta con nosotros y estaremos encantados de responder tus dudas..
                            </div>

                        </div>
                    </div>
                    <!-- End Section Headings -->

                    <!-- Service Grid -->
                    <div class="alt-service-grid">
                        <div class="row">


                            <div class="col-sm-6 col-md-3 col-lg-3">

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="100">
                                        <div class="alt-service-icon">
                                            <span class="icon-cup"></span>
                                        </div>
                                        <h3 class="alt-services-title">Branding</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="200">
                                        <div class="alt-service-icon">
                                            <span class="icon-screen-desktop"></span>
                                        </div>
                                        <h3 class="alt-services-title">Diseño Web</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="300">
                                        <div class="alt-service-icon">
                                            <span class="icon-ghost"></span>
                                        </div>
                                        <h3 class="alt-services-title">Diseño de Logo</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="400">
                                        <div class="alt-service-icon">
                                            <span class="icon-pencil"></span>
                                        </div>
                                        <h3 class="alt-services-title">Ilustraciones</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="400">
                                        <div class="alt-service-icon">
                                            <span class="icon-like"></span>
                                        </div>
                                        <h3 class="alt-services-title">Redes Sociales</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                            </div>


                            <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">

                                <div class="alt-services-image animate-init" data-anim-type="fade-in-up" data-anim-delay="200">
                                    <img src="images/promo-4.png" alt="" />
                                </div>

                            </div>


                            <div class="col-sm-6 col-md-3 col-lg-3">

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="100">
                                        <div class="alt-service-icon">
                                            <span class="icon-paper-plane"></span>
                                        </div>
                                        <h3 class="alt-services-title">Desarrollo Web</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="200">
                                        <div class="alt-service-icon">
                                            <span class="icon-camera"></span>
                                        </div>
                                        <h3 class="alt-services-title">Fotografia</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="300">
                                        <div class="alt-service-icon">
                                            <span class="icon-pie-chart"></span>
                                        </div>
                                        <h3 class="alt-services-title">Plan de Marketing</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="400">
                                        <div class="alt-service-icon">
                                            <span class="icon-support"></span>
                                        </div>
                                        <h3 class="alt-services-title">Soporte</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>

                                </div>
                                <!-- End Service Item -->

                                <!-- Alt Service Item -->
                                <div class="alt-service-wrap">
                                    <div class="alt-service-item animate-init" data-anim-type="fade-in" data-anim-delay="400">
                                        <div class="alt-service-icon">
                                            <span class="icon-graph"></span>
                                        </div>
                                        <h3 class="alt-services-title">Analíticas y Reportes</h3>
                                    </div>

                                    <div class="alt-service-butt local-scroll">
                                        <a href="#contact">Saber más</a>
                                    </div>
                                </div>
                                <!-- End Service Item -->

                            </div>


                        </div>
                    </div>
                    <!-- End Service Grid -->

                </div>
            </section>
            <!-- End Alternative Services Section -->







            <!-- Fullwidth Slider -->
            <div class="fullwidth-slider owl-carousel bg-dark">
              <!-- Slide Item -->
              <section class="page-section bg-scroll bg-light-alfa-90" data-background="images/full-width-images/section-bg-18.jpg">
                  <div class="container relative">

                      <div class="row">

                          <div class="col-md-5 col-lg-4 mb-sm-40">

                              <!-- About Project -->
                              <div class="text">
                                  <h3 class="uppercase mb-30 mb-xxs-10">DESCARGAS<span class="st-point">.</span></h3>
                                  <p>
                                      Descarga fondos de pantalla y otros recursos de AgenciaCoder.
                                  </p>

                                  <div class="mt-40">
                                      <a href="#" class="btn btn-mod btn-border-c btn-medium" target="_blank">Descargar Ahora</a>
                                  </div>

                              </div>
                              <!-- End About Project -->

                          </div>

                          <div class="col-md-7 col-lg-offset-1">

                              <!-- Image -->
                              <div class="work-full-media mt-0">
                                  <img src="images/portfolio/full-project-4.png" alt="" />
                              </div>
                              <!-- End Image -->

                          </div>

                     </div>

                  </div>
              </section>
              <!-- End Slide Item -->

                <!-- Slide Item -->
                <section class="page-section bg-scroll bg-light-alfa-90" data-background="images/full-width-images/section-bg-18.jpg">
                    <div class="container relative">

                        <div class="row">

                            <div class="col-md-5 col-lg-4 mb-sm-40">

                                <!-- About Project -->
                                <div class="text">
                                    <h3 class="uppercase mb-30 mb-xxs-10">DESCARGAS</h3>
                                    <p>
                                        Descarga fondos de pantalla y otros recursos de AgenciaCoder.
                                    </p>

                                    <div class="mt-40">
                                        <a href="#" class="btn btn-mod btn-border-c btn-medium" target="_blank">Descargar Ahora</a>
                                    </div>

                                </div>
                                <!-- End About Project -->

                            </div>

                            <div class="col-md-7 col-lg-offset-1">

                                <!-- Image -->
                                <div class="work-full-media mt-0">
                                    <img src="images/portfolio/full-project-5.png" alt="" />
                                </div>
                                <!-- End Image -->

                            </div>

                       </div>

                    </div>
                </section>
                <!-- End Slide Item -->



                <!-- Slide Item -->
                <section class="page-section bg-scroll bg-light-alfa-90" data-background="images/full-width-images/section-bg-18.jpg">
                    <div class="container relative">

                        <div class="row">

                            <div class="col-md-5 col-lg-4 mb-sm-40">

                                <!-- About Project -->
                                <div class="text">
                                    <h3 class="uppercase mb-30 mb-xxs-10">DESCARGAS</h3>
                                    <p>
                                        Descarga fondos de pantalla y otros recursos de AgenciaCoder.
                                    </p>

                                    <div class="mt-40">
                                        <a href="#" class="btn btn-mod btn-border-c btn-medium" target="_blank">Descargar Ahora</a>
                                    </div>

                                </div>
                                <!-- End About Project -->

                            </div>

                            <div class="col-md-7 col-lg-offset-1">

                                <!-- Image -->
                                <div class="work-full-media mt-0">
                                    <img src="images/portfolio/full-project-6.png" alt="" />
                                </div>
                                <!-- End Image -->

                            </div>

                       </div>

                    </div>
                </section>
                <!-- End Slide Item -->
            </div>
            <!-- End Fullwidth Slider -->



            <!-- Portfolio Section -->
            <section class="page-section bg-dark" id="portfolio">
                <div class="relative">

                    <!-- Section Headings -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

                            <h3 class="banner-heading align-center">TRABAJOS<span class="st-point">.</span></h3>
                            <h2 class="section-heading mb-40 mb-xxs-20">Un buen ojo para el detalle hace que nuestras obras sean excelentes</h2>
                            <div class="section-line mb-60 mb-xxs-30"></div>
                        </div>
                    </div>
                    <!-- End Section Headings -->

                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-3 hide-titles clearfix" id="work-grid">

                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography branding">
                            <a href="images/portfolio/full-project-1.png" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-2.png" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">NoticiaNorte</h3>
                                    <div class="work-descr">
                                        El Diario de Vicente López
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->

                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography branding">
                            <a href="images/portfolio/full-project-2.png" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="images/portfolio/projects-1.png" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">La guia de Vicente López</h3>
                                    <div class="work-descr">
                                      Guia de negocios y servicios
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->

                        <!-- Work Item (External Page) -->
                        <!-- <li class="work-item mix branding design">
                            <a href="project-page-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-2.png
                                    " alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Bicycles</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li> -->
                        <!-- End Work Item -->

                        <!-- Work Item (Ajax Expander) -->
                        <!-- <li class="work-item mix design photography">
                            <a href="works/ajax-project-3.html" class="work-ajax-link">
                                <div class="work-img">
                                    <img class="work-img" src="images/portfolio/projects-1.png" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Clothing Mockup</h3>
                                    <div class="work-descr">
                                        Ajax Expander
                                    </div>
                                </div>
                            </a>
                        </li> -->
                        <!-- End Work Item -->


                    </ul>
                    <!-- End Works Grid -->

                </div>
            </section>
            <!-- End Portfolio Section -->


            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">

                    <div class="row">

                        <div class="col-md-8 col-lg-6 col-lg-offset-2 banner-text">

                            <!-- Text -->
                            <h3 class="banner-heading">Te gusta lo que ves?</h3>

                            <div class="banner-decription">
                              Comenzá tu proyecto hoy, no pierdas más tiempo!!
                              <br>Contrata alguno de nuestro servicios..
                            </div>

                        </div>
                        <div class="col-md-4 col-lg-2 banner-button">
                            <!-- Button -->
                            <a href="{{'planes'}}" class="btn btn-mod btn-w btn-icon btn-large ext-link">
                                <span><i class="fa fa-usd"></i></span>
                                Ver planes
                            </a>
                        </div>

                    </div>

                </div>
            </section>
            <!-- End Call Action Section -->

            <!-- Testimonial Section -->
            <section class="small-section bg-gray">
                <div class="container relative">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <!-- Section Icon -->
                            <div class="section-icon color">
                                <span class="icon-bubbles"></span>
                            </div>

                            <!-- Section Title -->
                            <h3 class="small-title"><span class="serif">La gente</span> dice:</h3>

                            <div class="section-line mt-20 mb-30"></div>

                            <!-- Slider -->
                            <div class="single-carousel black owl-carousel">

                                <!-- Slider Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        Lograron que nuestro proyecto sea la principal opción de los vecinos a la hora de informarse, gracias al rápido posicionamiento en la zona y las redes sociales...

                                    </blockquote>

                                    <!-- Author -->
                                    <div class="testimonial-author">
                                        Christian Thomsen Hall, NoticiaNorte
                                    </div>
                                </div>
                                <!-- End Slider Item -->

                                <!-- Slider Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        Excelente diseño y atención, muchas gracias!!
                                    </blockquote>

                                    <!-- Author -->
                                    <div class="testimonial-author">
                                        Ramiro Pablo Gomez, La Guia de Vicente López
                                    </div>
                                </div>
                                <!-- End Slider Item -->

                                <!-- Slider Item -->
                                <div>
                                    <blockquote class="testimonial">
                                        Ahora puedo vender a más personas con mi tienda online.. Gracias por responder a todas mis dudas. #LaPicadaNoSeMancha
                                    </blockquote>

                                    <!-- Author -->
                                    <div class="testimonial-author">
                                        Cristina Rivera, LaPicadaNoSeMancha
                                    </div>
                                </div>
                                <!-- End Slider Item -->

                            </div>
                            <!-- Ent Slider -->

                        </div>
                    </div>

                </div>
            </section>
            <!-- End Testimonial Section -->


            <!-- Logotypes Section -->
            <section class="small-section bg-gray-lighter pt-10 pb-10">
                <div class="container relative">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="small-item-carousel black owl-carousel mb-0 animate-init" data-anim-type="fade-in-right-large" data-anim-delay="100">

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-1.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-2.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-3.svg" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-4.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-5.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-6.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                                <!-- Logo Item -->
                                <div class="logo-item">
                                    <img src="images/clients-logos/client-7.png" width="100" height="60" alt="" />
                                </div>
                                <!-- End Logo Item -->

                            </div>

                         </div>
                     </div>

                 </div>
            </section>
            <!-- End Logotypes -->
<!--*********************************************************************-->

            <!-- Blog Section -->
            {{-- <section class="page-section" id="news">
                <div class="relative"> --}}

                    <!-- Section Headings -->
                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                                <div class="section-title">
                                    Blog<span class="st-point">.</span>
                                </div>
                                <h2 class="section-heading">Compartimos nuestras mejores ideas y noticias del sector en nuestro blog</h2>
                                <div class="section-line mb-60 mb-xxs-30"></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Section Headings -->

                    <!-- Blog Posts Grid -->
                    {{-- <div class="last-posts-grid clearfix"> --}}

                        <!-- Blog Item -->
                        {{-- <a href="blog-post.html" class="lp-item animate-init" data-anim-type="fade-in" data-anim-delay="100">

                            <div class="lp-image">

                                <img src="images/blog/post-prev-1.jpg" alt="" />

                                <div class="lp-date">
                                    <span class="lp-date-num">10</span>
                                    Jule
                                </div>
                                <div class="lp-more">
                                    Read More
                                </div>

                            </div>

                            <div class="lp-descr">
                                <h4 class="lp-title">New Design Trends</h4>
                                <div class="lp-author">
                                    Posted by John Doe
                                </div>
                            </div>

                        </a> --}}
                        <!-- End Blog Item -->

                        <!-- Blog Item -->
                        {{-- <a href="blog-post.html" class="lp-item animate-init" data-anim-type="fade-in" data-anim-delay="200">

                            <div class="lp-image">

                                <img src="images/blog/post-prev-2.jpg" alt="" />

                                <div class="lp-date">
                                    <span class="lp-date-num">09</span>
                                    Jule
                                </div>
                                <div class="lp-more">
                                    Read More
                                </div>

                            </div>

                            <div class="lp-descr ext-link">
                                <h4 class="lp-title">Minimalistic Design</h4>
                                <div class="lp-author">
                                    Posted by Sam Deen
                                </div>
                            </div>

                        </a> --}}
                        <!-- End Blog Item -->

                        <!-- Blog Item -->
                        {{-- <a href="blog-post.html" class="lp-item animate-init" data-anim-type="fade-in" data-anim-delay="300">

                            <div class="lp-image">

                                <img src="images/blog/post-prev-3.jpg" alt="" />

                                <div class="lp-date">
                                    <span class="lp-date-num">07</span>
                                    Jule
                                </div>
                                <div class="lp-more">
                                    Read More
                                </div>

                            </div>

                            <div class="lp-descr">
                                <h4 class="lp-title">Hipster&rsquo;s Style in&nbsp;Web</h4>
                                <div class="lp-author">
                                    Posted by John Doe
                                </div>
                            </div>

                        </a> --}}
                        <!-- End Blog Item -->

                        <!-- Blog Link -->
                        {{-- <a href="blog-list.html" class="lp-item blog-link animate-init" data-anim-type="fade-in" data-anim-delay="400"> --}}

                            <!-- This is the blank image with size similar to blog's preview images -->
                            {{-- <img src="images/blog/blog-link-height.png" alt="" />

                            <div class="bl-text js-height-parent">
                                <div class="bl-text-sub">

                                    <div class="bl-icon">
                                        <i class="fa fa-angle-right"></i>
                                    </div>

                                    <div class="bl-line-1">
                                        Ver más
                                    </div>

                                    <div class="bl-line-2">
                                        ir al <span class="serif">Blog</span>
                                    </div>

                                </div>
                            </div>

                        </a> --}}
                        <!-- End Blog Link -->

                    {{-- </div> --}}
                    <!-- End Blog Posts Grid -->

                {{-- </div>
            </section> --}}
            <!--End  Blog Section -->


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



        <!-- Works Expander -->
        <div class="work-full">
            <div class="work-navigation clearfix">
                <a class="work-prev"><span><i class="fa fa-chevron-left"></i>&nbsp;Previous</span></a>
                <a class="work-all"><span><i class="fa fa-times"></i>&nbsp;All works</span></a>
                <a class="work-next"><span>Next&nbsp;<i class="fa fa-chevron-right"></i></span></a>
            </div>
            <div class="work-full-load">
            </div>
            <div class="work-loader">
            </div>
        </div>
        <div class="body-masked">
        </div>
        <!-- End Works Expander -->



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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGV6dfu0-UrBB7QnvGdeDszxDUl6-lNts"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/animations.min.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    </body>
</html>
