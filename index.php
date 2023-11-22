<?php
session_start();

// Obtener el idioma actual del usuario (por ejemplo, desde una variable de sesión)
$userLanguage = isset($_SESSION['language']) ? $_SESSION['language'] : 'en';



function translate($key) {
  global $translations;
  return isset($translations[$key]) ? $translations[$key] : $key;
}

// Verificar si se cambió el idioma a través del formulario
if (isset($_POST['change_language'])) {
    $userLanguage = $_POST['language'];
    $_SESSION['language'] = $userLanguage;
}

// Función para mostrar texto traducido

// Incluir el archivo de traducciones correspondiente al idioma actual
include 'lang/' . $userLanguage . '.php';

// Resto de tu código HTML/PHP...
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">

    <title><?php echo translate('title')?></title>
</head>
<body>

  
  <!-- BOTÓN BOLETOS -->
  <div id="boton-boletos" class="position-fixed top-50 end-0 translate-middle-y z-3">
    <a href="" class="btn btn-primary border-0 btn-lg boletos-btn">
        <div class="row px-3 ">
            <?php echo translate('btn-boletos')?>
        </div>
        
    </a>
  </div>
  <!-- BOTÓN BOLETOS END -->

  <!-- INICIO / HEADER -->
  <div id="inicio" class="container-fluid section-wall-bg px-0 pt-0">
    <!-- LENGUAJE -->
    
    <form method="post">
      <div id="lenguaje" class="position-absolute top-0 end-0 col-1">
        <select name="language" id="language" onchange="this.form.submit()">
            <option value="en" <?php echo ($userLanguage == 'en') ? 'selected' : ''; ?>>English</option>
            <option value="es" <?php echo ($userLanguage == 'es') ? 'selected' : ''; ?>>Español</option>
            <!-- Agregar más opciones de idioma según sea necesario -->
        </select>
        <input type="hidden" name="change_language" value="1">
      </div>
    </form>

    <!-- LENGUAJE END -->
    <!-- LOGO -->
    <div class="container-fluid ps-0">
      <div class="row">
        <div class="col-2">
          <img src="./assets/images/logo.png" class="logo-img" alt="">
        </div>

        <div class="container col-8 d-none d-lg-block text-center">
          <div class="row align-items-end h-100 gx-3 menu-option">
            <div class="col">
              <a href="#tu-visita" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-visit') ?></p></a>
            </div>
            <div class="col">
              <a href="#boletos" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-tickets') ?></p></a>
            </div>
            <div class="col">
              <a href="#jardin-secreto" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-garden') ?></p></a>
            </div>
            <div class="col">
              <a href="#calendario" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-events') ?></p></a>
            </div>
            <div class="col">
              <a href="#grupos" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-groups') ?></p></a>
            </div>
            <div class="col">
              <a href="#servicios" class="link-light link-underline link-underline-opacity-0"><p class="h4"><?php echo translate('section-services') ?></p></a>
            </div>
          
          </div>
        </div>

        <div class="container d-md-block d-lg-none col-10">
            <div class="row h-100">
              <div class="col-10"></div>
              <div class="col-2 h-100 position-relative">
                  <a class="btn btn-primary position-absolute start-20 top-50 translate-middle-x border-0 bg-pink btn-pink" data-bs-toggle="dropdown" type="button">
                  <i class="bi bi-list list-font"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#tu-visita"><?php echo translate('section-visit') ?></a></li>
                  <li><a class="dropdown-item" href="#boletos"><?php echo translate('section-tickets') ?></a></li>
                  <li><a href="#jardin-secreto" class="dropdown-item"><?php echo translate('section-garden') ?></a></li>
                  <li><a href="#calendario" class="dropdown-item"><?php echo translate('section-events') ?></a></li>
                  <li><a class="dropdown-item" href="#grupos"><?php echo translate('section-groups') ?></a></li>
                  <li><a class="dropdown-item" href="#servicios"><?php echo translate('section-services') ?></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
      
    </div>
    <!-- LOGO END -->

    <div class="container-fluid px-0 py-5">
      <img src="./assets/images/red-stripe.png" class="img-fluid w-100 stripe" alt="">
    </div>

    <div class="container-fluid pt-5">
      <div class="row gx-4 text-center">
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <div class="presentation">
                    <h2><?php echo translate('main-presentation') ?></h2>
                    <p class="sub-text">Carretera Escénica esq. Campeche,<br>Colina del Sol 23010, La Paz B.C.S.</p>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <img src="./assets/images/autorretrato-sm.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-lg-4 pb-3">
          <section class="square mx-auto">
            <div class="frame-1">
              <div class="frame-2">
                <div class="presentation">
                  <h2><?php echo translate('main-tickets') ?></h2>
                  <a href="#" class="btn btn-primary btn-lg border-0 py-3 comprar-btn"><?php echo translate('btn-buy') ?></a>
                </div>
              </div>
            </div>
          </section>
        </div>
        </div>
    </div>
    
    <div class="container pb-5">
      <div class="row">
        <div class="col-2 d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 text-center">
          <div class="row text-break">
            <p class="h4"><a href="mailto:contacto@fridaensujardinsecreto.com" class="link-light link-underline link-underline-opacity-0 ">contacto@fridaensujardinsecreto.com</a></p>
          </div>
          <div class="row gx-0 pb-4">
            <div class="position-relative top-0 start-50 translate-middle-x">
              <a href="https://www.instagram.com/fridaensujardinsecreto/"><img src="./assets/images/redes-instagram.png" alt="instagram" class="icon-social"></a>
              <a href="https://www.facebook.com/profile.php?id=100092258479518"><img src="./assets/images/redes-facebook.png" alt="facebook" class="icon-social"></a>
              <a href="https://es.linkedin.com/posts/frida-en-su-jardín-secreto_lapaz-bcs-bajacaliforniasur-activity-7090360276515966978-dpPz?trk=public_profile_like_view"><img src="./assets/images/redes-linkedin.png" alt="linkedin" class="icon-social"></a>
              <a href="https://www.tiktok.com/@fridaensujardinsecreto"><img src="./assets/images/redes-tiktok.png" alt="tiktok" class="icon-social"></a>
              <a href="https://www.instagram.com/fridaensujardinsecreto/"><img src="./assets/images/redes-x.png" alt="x" class="icon-social"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-2">
          <img src="./assets/images/museo-frida-kahlo-seeklogo.com.jpg" alt="Museo Frida Kahlo" class="logo-museo start-50 position-relative top-0 translate-middle-x">
        </div>
      </div>
    </div>

    <div class="container-fluid px-0">
      <img src="./assets/images/red-stripe.png" class="img-fluid w-100 stripe" alt="">
    </div>
  </div>
  <!-- INICIO / HEADER END-->


  <!-- PLANEA TU VISITA -->
  <div id="tu-visita" class="container-fluid section-padding">
    <div class="container">
      <div class="row align-items-start poppins-regular">
        
        <div class="col-sm-12 col-md-12 col-lg-5 px-5">
          <h1 class="pink-title pb-5 txt-titulo lobster"><?php echo translate('section-visit') ?></h1>
          <h5 class="py-3 poppins"><?php echo translate('visit-txt-schedules') ?></h5>
          <div class="row">
              <p><?php echo translate('visit-schedules') ?></p>
          </div>
          <div class="vertical-line"></div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3 px-5 custom-border-start">
          <h5 class="pt-2 poppins"><?php echo translate('visit-txt-admissions') ?></h5>
          <div class="row py-3">
            <h5 class="pb-3 tu-visita-tarifas"><?php echo translate('visit-admission-txt-general') ?></h5>
            <div class="mb-1"><p><?php echo translate('visit-admission-national') ?></p></div>
            <div class="mb-1"><p><?php echo translate('visit-admission-foreign') ?></p></div>
            <div class="mb-1"><p><?php echo translate('visit-admission-special') ?></p></div>
            <div class="mb-1"><p><?php echo translate('visit-admission-scholar') ?></p></div>
          </div>
          <div class="row py-3">
            <h5 class="pb-3 tu-visita-tarifas"><?php echo translate('visit-txt-tour') ?></h5>
            <div class="mb-1"><p><?php echo translate('visit-tour-discount') ?></p></div>
          </div>
        </div>
    
        <div class="col-sm-12 col-md-12 col-lg-4 px-5">
          
          <div class="row py-3">
            <h5 class="pb-3 tu-visita-tarifas"><?php echo translate('visit-txt-free') ?></h5>
            <div class="mb-1"><p><?php echo translate('visit-free-kids') ?></p></div>
          </div>

          <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1819.9570053799562!2d-110.304437!3d24.1747483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86afd55ce56de7db%3A0x2e35376deb573de8!2sFrida%20en%20su%20Jardin%20Secreto!5e0!3m2!1ses-419!2smx!4v1697054828026!5m2!1ses-419!2smx" width="400" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PLANEA TU VISITA END-->

  <!-- BOLETOS -->
  <div id="boletos" class="container-fluid section-wall-bg">
    <div class="container section-padding">
      <div id="boletos-parte-1" class="row align-items-start">
        <div class="col-sm-12 col-md-12 px-5 pb-4">
          <h1 class="white-title txt-titulo lobster"><?php echo translate('section-tickets') ?></h1>	
          <hr class="linea-horizontal-blanca"/>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 px-5 text-white pb-4 poppins">
          <div class="row">
            <p><?php echo translate('tickets-description') ?></p>
          </div>

          <h5 class="py-3"><?php echo translate('tickets-schedules') ?></h5>

          <div class="row">
            <p class="mb-1 poppins-regular"><?php echo translate('layout-date-mon-sun') ?>: <?php echo translate('layout-hour-8-20') ?></p>
          </div>

          <div id="boletos-parte-2" class="row pt-5">
            <p><?php echo translate('tickets-steps') ?></p>
            <ul class="px-5">
              <li><?php echo translate('tickets-step-1') ?></li>
              <li><?php echo translate('tickets-step-2') ?></li>
            </ul>
            <p><?php echo translate('tickets-thanks') ?></p>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 px-5 text-white pb-4 poppins">
          <div class="row">
            <img src="./assets/images/Calendario.png" class="img-fluid d-none" alt="">

            <div id="boletos-parte-2" class="row">                 
              <p><?php echo translate('tickets-notallowed') ?></p>
              <ul class="px-5">
                <li><?php echo translate('tickets-notallowed-1') ?></li>
                <li><?php echo translate('tickets-notallowed-2') ?></li>
                <li><?php echo translate('tickets-notallowed-3') ?></li>
                <li><?php echo translate('tickets-notallowed-4') ?></li>
              </ul>

              <p><?php echo translate('tickets-onceinside') ?></p>
              <ul class="px-5">
                <li><?php echo translate('tickets-onceinside-1') ?></li>
                <li><?php echo translate('tickets-onceinside-2') ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BOLETOS END -->

  <!-- SLIDER -->
  <div id="jardin-secreto" class="container-fluid section-wall-bg px-0 ">
    <div class="container-fluid  px-0 ">  
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid px-0">
              <div class="row">

                <div class="col-12 col-lg-6">
                  <img src="./assets/images/imagen-1.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row py-5">
                        <h1 class="white-title lobster"><?php echo translate('title') ?></h1>
                      </div>
                      <div class="row pb-5">
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-1-txt-1') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-1-txt-2') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-1-txt-3') ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <img src="./assets/images/imagen-2.jpeg" class="img-fluid h-100" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row py-5">
                        <h1 class="white-title lobster"><?php echo translate('title') ?></h1>
                      </div>
                      <div class="row pb-5">
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-2-txt-1') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-2-txt-2') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-2-txt-3') ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <img src="./assets/images/imagen-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-6 pe-5">
                  <div class="row">
                    <div class="col px-5">
                      <div class="row py-5">
                        <h1 class="white-title lobster"><?php echo translate('title') ?></h1>
                      </div>
                      <div class="row pb-5">
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-3-txt-1') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-3-txt-2') ?>
                        </p>
                        <p class="slider-p too-much-text">
                          <?php echo translate('slider-page-3-txt-3') ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <div class="container position-relative">
            <div class="col-4 rounded-circle p-3 position-absolute top-50 start-50 translate-middle btn-prev slider-btn">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </div>
          </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <div class="container position-relative">
            <div class="col-4 rounded-circle p-3 position-absolute top-50 start-40 translate-middle slider-btn">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>
  <!-- SLIDER END -->

  <!-- CALENDARIO -->
  <div id="calendario" class="container-fluid px-0 bg-black calendario">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10 col-lg-7 bg-orange custom-border">
          <h1 class="white-title p-3 txt-titulo lobster"><?php echo translate('events-header') ?></h1>
        </div>
      </div>
    </div>

    <div class="container p-5" style="margin-bottom: 100px;">
      <div class="row align-items-start white-title">
        <div class="col-sm-12 col-lg-9">

          <div class="row p-3" style="border-bottom: 3px dotted white;">
            <div class="col-sm-12 col-lg-2 text-wrap lobster">
              <h5><?php echo translate('events-date-1') ?></h5>
            </div>
            <div class="col-sm-12 col-lg-10 poppins" style="padding-left: 30px;">
              <p class="p-0 m-0"> <?php echo translate('events-activity-1') ?></p>
            </div>
          </div>

          <div class="row p-3" style="border-bottom: 3px dotted white;">
            <div class="col-sm-12 col-lg-2 text-wrap lobster">
              <h5><?php echo translate('events-date-2') ?></h5>
            </div>
            <div class="col-sm-12 col-lg-10 poppins"  style="padding-left: 30px;">
              <p class="p-0 m-0"><?php echo translate('events-txt-activity') ?></p>
              <p class="p-0 m-0">* <?php echo translate('events-activity-2-1') ?></p>
              <p class="p-0 m-0">* <?php echo translate('events-activity-2-2') ?></p>
            </div>
          </div>

          <div class="row p-3" style="border-bottom: 3px dotted white;">
            <div class="col-sm-12 col-lg-2 text-wrap lobster">
              <h5><?php echo translate('events-date-3') ?></h5>
            </div>
            <div class="col-sm-12 col-lg-10 poppins" style="padding-left: 30px;">
              <p class="p-0 m-0"><?php echo translate('events-activity-3') ?></p>
            </div>
          </div>

          <div class="row p-3" style="border-bottom: 3px dotted white;">
            <div class="col-sm-12 col-lg-2 text-wrap lobster">
              <h5><?php echo translate('events-date-4') ?></h5>
            </div>
            <div class="col-sm-12 col-lg-10 poppins" style="padding-left: 30px;">
              <p class="p-0 m-0"><?php echo translate('events-activity-4') ?></p>
            </div>
          </div>

          <div class="row p-3">
            <div class="col-sm-12 col-lg-2 text-wrap lobster">
              <h5><?php echo translate('events-date-5') ?></h5>
            </div>
            <div class="col-sm-12 col-lg-10 poppins" style="padding-left: 30px;">
              <p class="p-0 m-0"><?php echo translate('events-txt-activity') ?></p>
              <p class="p-0 m-0">* <?php echo translate('events-activity-5-1') ?></p>
              <p class="p-0 m-0">* <?php echo translate('events-activity-5-2') ?></p>
              <p class="pt-4 m-0" style="font-size: 15px;"><?php echo translate('events-info') ?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-3"></div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row" style="position: relative;">
        <div>
          <img src="./assets/images/logo.png" class="logo-img" alt="" style="position: absolute; right: 0; bottom: 0;">
        </div>
      </div>
    </div>
  </div>
  <!-- CALENDARIO END -->

  <!-- GRUPOS -->
  <div id="grupos" class="container-fluid px-0 bg-white">
    <div class="container section-padding">
        <h1 class="pink-title pb-5 txt-titulo lobster"><?php echo translate('section-groups') ?></h1>
        
        <div class="row pt-5">
          <div class="col-sm-12 col-lg-4 text-wrap poppins">
            <h5><?php echo translate('groups-txt-school') ?></h5>
          </div>
          <div class="col-sm-12 col-lg-8 px-5 custom-border-start poppins-regular">
            <p class="pb-4"><?php echo translate('groups-school') ?></p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12 col-lg-4 text-wrap poppins">
            <h5><?php echo translate('groups-txt-community') ?></h5>
          </div>
          <div class="col-sm-12 col-lg-8 px-5 custom-border-start poppins-regular">
            <p class="pb-4"><?php echo translate('groups-community') ?></p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12 col-lg-4 text-wrap poppins">
            <h5><?php echo translate('groups-txt-private') ?></h5>
          </div>
          <div class="col-sm-12 col-lg-8 px-5 custom-border-start poppins-regular">
            <p><?php echo translate('groups-private') ?></p>
          </div>
        </div>
    </div>
  </div>
  <!-- GRUPOS END -->

  <!-- SERVICIOS -->
  <div id="servicios" class="container-fluid section-wall-bg section-padding px-0 py-0">

    <div class="container d-none">
      <h1 class="white-title txt-titulo lobster"><?php echo translate('section-services') ?></h1>
    </div>

    <div class="container-fluid px-0 pb-5">
      <img src="./assets/images/red-stripe.png" class="img-fluid w-100 stripe" alt="">
    </div>

    <div class="container my-5">
      <div class="row gx-4 text-center">
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><?php echo translate('services-block-rosita') ?></h2>
                          </div>
                          <div class="row blue-content">
                            <p><?php echo translate('layout-date-upcoming') ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><?php echo translate('layout-shop') ?></h2>
                          </div>
                          <div class="row services-poppins">
                            <p><?php echo translate('services-block-shop') ?></p>
                            <p class="blue-content"><b><?php echo translate('layout-date-mon-sun') ?></b><br>
                            <?php echo translate('layout-hour-8-20') ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-12 col-lg-4">
                  <section class="square mx-auto">
                    <div class="frame-1">
                      <div class="frame-2">
                        <div class="presentation">
                          <div class="row">
                            <h2><?php echo translate('services-block-doce') ?></h2>
                          </div>
                          <div class="row services-poppins">
                            <p><?php echo translate('services-block-doce-txt') ?></p>
                            <p class="blue-content"><b><?php echo translate('layout-date-mon-sun') ?></b><br>
                            <?php echo translate('layout-hour-8-20') ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
    </div>
    
    <div class="container-fluid px-0 pt-5">
      <img src="./assets/images/red-stripe.png" class="img-fluid w-100 stripe" alt="">
    </div>
  </div>
  <!-- SERVICIOS END -->

  <!-- CONTÁCTANOS -->
  <div id="contactanos" class="container-fluid section-padding px-0 bg-white">
    <div class="container">
      
      <div class="row">
        <h1 class="txt-titulo text-break pink-title lobster"><?php echo translate('section-contact') ?></h1>

      </div>      
      <div class="row">  
        <div class="col-12 col-lg-6 py-5 px-5">
          <img src="./assets/images/autorretratocollarespinascolibri.jpg" class="img-fluid" alt="Autorretrato">
          <p class="m-0 pt-3 contactanos-direccion">D.R. © 2023 Banco de México, Fiduciario en el Fideicomiso Museos Diego Rivera y Frida Kahlo.</p>
          <p class="m-0 contactanos-direccion">Av. 5 de Mayo No. 20, Col. Centro, C.P. 06000, Ciudad de México</p>
        </div>
        <div id="contactanos" class="col-sm-12 col-md-12 col-lg-6 p-5 poppins-regular">
          <div class="row">
            <p class="pb-3"><?php echo translate('contact-txt-arrive') ?></p>
          </div>
          <div class="row">
            <h6 class="contactanos-datos"><?php echo translate('contact-txt-address') ?></h6><br><p><?php echo translate('contact-address') ?></p>
          </div>
          <div class="row">
            <h6 class="contactanos-datos"><?php echo translate('contact-txt-phone') ?></h6><br><p>612 128 8032</p>
          </div>
          <div class="row text-wrap pb-3">
            <h6 class="contactanos-datos"><?php echo translate('contact-txt-mail') ?></h6><br><p class="text-break">contacto@fridaensujardinsecreto.com</p>
          </div>
          <form class="pb-5">
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="nombre" class="form-label"><?php echo translate('contact-txt-name') ?>:</label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="correo" class="form-label"><?php echo translate('contact-txt-mail') ?>:</label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="correo" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="mb-3">
                  <label for="mensaje" class="form-label"><?php echo translate('contact-txt-message') ?>:</label>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <input type="text" class="form-control" id="mensaje" aria-describedby="emailHelp">
                </div>
              </div>
            </div>
            <div id="contactanos-terminos-condiciones"class="mb-3 form-check pb-3">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"><?php echo translate('contact-txt-agree') ?></label>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill border-0 px-4 bg-pink"><?php echo translate('btn-send') ?></button>
          </form>
          <div id="oferta-trabajo" class="p-3 rounded-4 bg-5">
            <p class="m-0"><?php echo translate('contact-txt-offer-1') ?></p>
            <p class="m-0"><?php echo translate('contact-txt-offer-2') ?></p>
            <p class="m-0"><?php echo translate('contact-txt-offer-3') ?></p>
            <p class="m-0"><?php echo translate('contact-txt-offer-4') ?></p>
            <p class="m-0 text-break"><?php echo translate('contact-txt-offer-5') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CONTÁCTANOS END -->

  <!-- FOOTER -->
  <div id="footer" class="container-fluid pb-5 mx-0 px-0 bg-black">
    <div class="container-fluid px-0">
      <div class="col-2 logo pb-5">
        <a href="#inicio"><img src="./assets/images/logo.png" class="logo-img" alt=""></a>
      </div>

      <div class="col-10"></div>
    </div>

    <div class="container pb-3">

      <div class="row">

        <div class="col-3">
        </div>

        <div class="col-8">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="row pb-3">
                <p class="h1 footer-titles"><?php echo translate('layout-links') ?></p>
              </div>
              <div class="row pb-3">
                <h4><a href="#tu-visita" class="link-light link-underline link-underline-opacity-0"><?php echo translate('section-visit') ?></a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#jardin-secreto" class="link-light link-underline link-underline-opacity-0"><?php echo translate('section-garden') ?></a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#grupos" class="link-light link-underline link-underline-opacity-0"><?php echo translate('section-groups') ?></a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#contactanos" class="link-light link-underline link-underline-opacity-0"><?php echo translate('section-contact') ?></a></h4>
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="row pb-3">
                <p class="h1 footer-titles"><?php echo translate('layout-shop') ?></p>
              </div>
              <div class="row pb-3">
                <h4><a href="#servicios" class="link-light link-underline link-underline-opacity-0"><?php echo translate('layout-restaurant') ?></a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#servicios" class="link-light link-underline link-underline-opacity-0"><?php echo translate('layout-garden-shop') ?></a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="#servicios" class="link-light link-underline link-underline-opacity-0"><?php echo translate('layout-coffee') ?></a></h4>
              </div>
            </div>

            <div class="col-12 col-lg-4">
              <div class="row pb-3">
                <p class="h1 footer-titles"><?php echo translate('layout-social') ?></p>
              </div>
              <div class="row pb-3">
                <h4><a href="https://www.tiktok.com/@fridaensujardinsecreto" class="link-light link-underline link-underline-opacity-0">TIK TOK</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="https://www.instagram.com/fridaensujardinsecreto/" class="link-light link-underline link-underline-opacity-0">Instagram</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="https://www.facebook.com/profile.php?id=100092258479518" class="link-light link-underline link-underline-opacity-0">Facebook</a></h4>
              </div>
              <div class="row pb-3">
                <h4><a href="https://es.linkedin.com/posts/frida-en-su-jardín-secreto_lapaz-bcs-bajacaliforniasur-activity-7090360276515966978-dpPz?trk=public_profile_like_view" class="link-light link-underline link-underline-opacity-0">LinkedIn</a></h4>
              </div>
            </div>

          </div>
        </div>

    </div>

    </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-2 d-block d-lg-none"></div>
        <div class="col-3 d-none d-lg-block"></div>
        <div class="col-12 col-lg-6 white-poppins text-center">
          <p>Carretera Escénica esq. Campeche,<br>
          Colina del Sol, 23010 La Paz</p>
        </div>
      </div>
    </div>

    <div class="container pt-3">
      <div class="row">
        <div class="col-3 d-none d-lg-block"></div>
        <div class="col-12 col-lg-6">
          <div class="row text-center pb-3">
            <p class="white-poppins footer-mail text-break">contacto@fridaensujardinsecreto.com</p>
          </div>
          <div class="row gx-0 pb-5">
            <div class="position-relative top-0 start-50 translate-middle-x fit-content">
              <a href="https://www.instagram.com/fridaensujardinsecreto/"><img src="./assets/images/redes-instagram.png" alt="instagram" class="icon-social"></a>
              <a href="https://www.facebook.com/profile.php?id=100092258479518"><img src="./assets/images/redes-facebook.png" alt="facebook" class="icon-social"></a>
              <a href="https://es.linkedin.com/posts/frida-en-su-jardín-secreto_lapaz-bcs-bajacaliforniasur-activity-7090360276515966978-dpPz?trk=public_profile_like_view"><img src="./assets/images/redes-linkedin.png" alt="linkedin" class="icon-social"></a>
              <a href="https://www.tiktok.com/@fridaensujardinsecreto"><img src="./assets/images/redes-tiktok.png" alt="tiktok" class="icon-social"></a>
              <a href="https://www.instagram.com/fridaensujardinsecreto/"><img src="./assets/images/redes-x.png" alt="x" class="icon-social"></a>
            </div>
            
          </div>
        </div>
        <div class="col-12 col-lg-3 px-0">
          <div class="position-relative top-0 start-50 translate-middle-x fit-content">
            <img src="./assets/images/museo-frida-kahlo-seeklogo.com.jpg" alt="Museo Frida Kahlo" class="logo-museo me-4">
            <img src="./assets/images/logo-uabcs.png" alt="uabcs" class="logo-museo">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER END -->

  <!-- Extras 1 -->
  <div class="container-fluid px-0 bg-pink">
    <div class="container">
      <div class="row py-3 text-center">
        <div class="col-6 col-md-3 extra">2023 Frida en su Jardín Secreto</div>
        <div class="col-6 col-md-3 extra"><?php echo translate('footer-copyright') ?></div>
        <div class="col-6 col-md-3">
          <button type="button" class="btn btn-primary no-button-style p-0 extra" data-bs-toggle="modal" data-bs-target="#avisoPrivacidad">
            <p class="white-poppins m-0"><?php echo translate('footer-privacy') ?></p>
          </button>
          <!-- Modal Aviso de Privacidad -->
          <div class="modal fade" id="avisoPrivacidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso de Privacidad</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body txt-align-start">
                  <p>FRIDA EN SU JARDIN SECRETO <br><br>
                    Francisco I. Madero #140, Col. Centro. La Paz, Baja California Sur <br><br>
                    FRIDA EN SU JARDIN SECRETO con domicilio en Francisco I. Madero #140, Col. Centro, es el responsable del uso y protección de sus datos personales, y al respecto le informa lo siguiente: <br><br>
                    Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que no son necesarias para el servicio solicitado pero que nos permiten y facilitan brindarle una mejor atención: <br><br>
                    Ofrecer contenidos personalizados; promociones y noticias exclusivas sobre los eventos de FRIDA EN SU JARDIN SECRETO relacionados con sus intereses. Anunciar preventas, descuentos y cambios de este aviso de privacidad. <br><br>  
                    FRIDA EN SU JARDIN SECRETO no transfiere a ningún tercero los Datos personales que recabe en sitio y/o otro medio. <br><br>
                    La información recabada podrá ser utilizada para fines mercadológicos y de prospección comercial como conducir investigaciones mercadológicas o promocionales. <br><br>
                    Derechos ARCO <br><br>
                    Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstas en la normativa (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO. <br><br>
                    Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva enviar un mail a contacto@fridaensujardinsecreto.com  con la siguiente información: <br><br>
                    Copia electrónica de identificación oficial. <br><br>
                    Descripción de los datos sobre los que quisiera información e indicar las modificaciones a realizarse (en caso de requerirlas). <br><br>
                    En caso de que no desee que sus datos personales sean tratados para estos fines adicionales, desde este momento usted nos puede comunicar lo anterior, notificando a nuestro personal de taquilla o mandando un mail a contacto@fridaensujardinsecreto.com <br><br>
                    La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros. <br><br>
                    FRIDA EN SU JARDIN SECRETO notificará cualquier cambio en el Aviso de Privacidad al correo registrado del usuario.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- MODAL AVISO DE PRIVACIDAD END -->
        </div>
        <div class="col-6 col-md-3">
          <button type="button" class="btn btn-primary no-button-style p-0 extra" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <p class="white-poppins m-0" ;><?php echo translate('footer-cancellation') ?></p>
          </button>
          <!-- Modal Térmios de Uso-->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Políticas de Cancelación</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body txt-align-start">
                  <p>
                    FRIDA EN SU JARDÍN SECRETO <br><br>
                    Gracias por comprar en FRIDA EN SU JARDÍN SECRETO. <br>
                    Por favor tome nota de los siguientes: <br><br>
                     
                    
                    <b>POLÍTICAS DE CANCELACIÓN</b><br><br>
                     
                    <b>1.</b>  Todas las ventas que se hagan por el sistema son definitivas, NO se aceptan: cancelaciones de compra, cambios o reembolsos. <br><br>
                     
                    <b>2.</b> FRIDA EN SU JARDIN SECRETO no envía boletos a domicilio. Los horarios de atención en taquilla son: <br><br>
                    
                    
                    
                    Lunes a sábado <br>
                    8 am - 8 pm <br><br>
                    Domingos <br>
                    8 am – 6 pm <br><br>
                    
                    <b>3.</b> En caso de que un HORARIO sea cancelado o pospuesto, FRIDA EN SU JARDIN SECRETO hará todo el esfuerzo para contactar vía e-mail a cada cliente en el plazo permitido. <br><br>
                    <b>4.</b> Mientras FRIDA EN SU JARDIN SECRETO lamenta los inconvenientes causados por estas circunstancias, FRIDA EN SU JARDIN SECRETO no se hará responsable de ningún costo o daño que pueda ocasionar tal cancelación o aplazamiento en los horarios. Semejantemente, la realización de horarios para boletos vendidos a los clientes es de completa responsabilidad de los operadores del recinto, FRIDA EN SU JARDIN SECRETO no será responsable de las pérdidas o daños causados a los clientes de estos eventos. <br><br>
                    
                    <b>5.</b> Todos los clientes que compran por FRIDA EN SU JARDIN SECRERO dan conocimiento de las limitaciones expuestas en estos “términos de uso”. <br><br>
                     
                    <b>6.</b> Los reembolsos sólo se realizarán para los horarios cancelados. En todos los casos cuando un boleto es reembolsado, sólo se reembolsa el costo del boleto, sin cargos.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- MODAL TÉRMINOS DE USO END -->
        </div>
      </div>
    </div>
  </div>
  <!-- Extras 1 END -->
  <!-- MODAL AVISO DE PRIVACIDAD -->

  
  
  <!-- Extras 2 
  <div class="container-fluid px-0 pb-0" style="background-color: var(--color-1);">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <!-- Button trigger modal
          <button type="button" class="btn btn-primary no-button-style p-0" data-bs-toggle="modal" data-bs-target="#avisoPrivacidad">
            <p class="white-poppins mt-3" style="font-size: 14px;">Aviso de Privacidad</p>
          </button>

          <!-- Modal Aviso de Privacidad
          <div class="modal fade" id="avisoPrivacidad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso de Privacidad</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: start;">
                  <p>FRIDA EN SU JARDIN SECRETO <br><br>
                    Francisco I. Madero #140, Col. Centro. La Paz, Baja California Sur <br><br>
                    FRIDA EN SU JARDIN SECRETO con domicilio en Francisco I. Madero #140, Col. Centro, es el responsable del uso y protección de sus datos personales, y al respecto le informa lo siguiente: <br><br>
                    Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que no son necesarias para el servicio solicitado pero que nos permiten y facilitan brindarle una mejor atención: <br><br>
                    Ofrecer contenidos personalizados; promociones y noticias exclusivas sobre los eventos de FRIDA EN SU JARDIN SECRETO relacionados con sus intereses. Anunciar preventas, descuentos y cambios de este aviso de privacidad. <br><br>  
                    FRIDA EN SU JARDIN SECRETO no transfiere a ningún tercero los Datos personales que recabe en sitio y/o otro medio. <br><br>
                    La información recabada podrá ser utilizada para fines mercadológicos y de prospección comercial como conducir investigaciones mercadológicas o promocionales. <br><br>
                    Derechos ARCO <br><br>
                    Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstas en la normativa (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO. <br><br>
                    Para el ejercicio de cualquiera de los derechos ARCO, usted deberá presentar la solicitud respectiva enviar un mail a contacto@fridaensujardinsecreto.com  con la siguiente información: <br><br>
                    Copia electrónica de identificación oficial. <br><br>
                    Descripción de los datos sobre los que quisiera información e indicar las modificaciones a realizarse (en caso de requerirlas). <br><br>
                    En caso de que no desee que sus datos personales sean tratados para estos fines adicionales, desde este momento usted nos puede comunicar lo anterior, notificando a nuestro personal de taquilla o mandando un mail a contacto@fridaensujardinsecreto.com <br><br>
                    La negativa para el uso de sus datos personales para estas finalidades no podrá ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros. <br><br>
                    FRIDA EN SU JARDIN SECRETO notificará cualquier cambio en el Aviso de Privacidad al correo registrado del usuario.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- MODAL AVISO DE PRIVACIDAD END
        </div>

        <div class="col">
          <!-- Button trigger modal
          <button type="button" class="btn btn-primary no-button-style p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <p class="white-poppins mt-3" style="font-size: 14px;">Términos de Uso</p>
          </button>

          <!-- Modal Térmios de Uso
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Términos de Uso</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: start;">
                  <p>
                    FRIDA EN SU JARDÍN SECRETO <br><br>
                    Gracias por comprar en FRIDA EN SU JARDÍN SECRETO. <br>
                    Por favor tome nota de los siguientes: <br><br>
                     
                    
                    <b>TÉRMINOS DE USO</b><br><br>
                     
                    <b>1.</b>  Todas las ventas que se hagan por el sistema son definitivas, NO se aceptan: cancelaciones de compra, cambios o reembolsos. <br><br>
                     
                    <b>2.</b> FRIDA EN SU JARDIN SECRETO no envía boletos a domicilio. Los horarios de atención en taquilla son: <br><br>
                    
                    
                    
                    Lunes a sábado <br>
                    8 am - 8 pm <br><br>
                    Domingos <br>
                    8 am – 6 pm <br><br>
                    
                    <b>3.</b> En caso de que un HORARIO sea cancelado o pospuesto, FRIDA EN SU JARDIN SECRETO hará todo el esfuerzo para contactar vía e-mail a cada cliente en el plazo permitido. <br><br>
                    <b>4.</b> Mientras FRIDA EN SU JARDIN SECRETO lamenta los inconvenientes causados por estas circunstancias, FRIDA EN SU JARDIN SECRETO no se hará responsable de ningún costo o daño que pueda ocasionar tal cancelación o aplazamiento en los horarios. Semejantemente, la realización de horarios para boletos vendidos a los clientes es de completa responsabilidad de los operadores del recinto, FRIDA EN SU JARDIN SECRETO no será responsable de las pérdidas o daños causados a los clientes de estos eventos. <br><br>
                    
                    <b>5.</b> Todos los clientes que compran por FRIDA EN SU JARDIN SECRERO dan conocimiento de las limitaciones expuestas en estos “términos de uso”. <br><br>
                     
                    <b>6.</b> Los reembolsos sólo se realizarán para los horarios cancelados. En todos los casos cuando un boleto es reembolsado, sólo se reembolsa el costo del boleto, sin cargos.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- MODAL TÉRMINOS DE USO END
        </div>
      </div>
    </div>
  </div>
  Extras 2 END -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N3LR93324F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-N3LR93324F');
  </script> 
  <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"d47bcdc4211451569994c5769cd1980f"})});</script>
</body>
</html>