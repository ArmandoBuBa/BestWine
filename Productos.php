<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");



$buscador = isset($_POST['buscador']) ? $_POST['buscador'] : '';


?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Vinos Más Populares">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Productos</title>
    <link rel="stylesheet" href="web.css" media="screen">
<link rel="stylesheet" href="Productos.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="web.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Productos">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-0dc0"><a href="Casa.html" class="u-image u-logo u-image-1" data-image-width="850" data-image-height="491" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-direction="">
        <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
      </a><nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse u-custom-font u-font-merriweather" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-white u-file-icon-1" href="#">
            <img src="images/2099153.png" alt="">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-font-merriweather u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-2-base u-text-active-black u-text-hover-black" href="Casa.html" style="padding: 22px 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-2-base u-text-active-black u-text-hover-black" href="Productos.html" style="padding: 22px 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-2-base u-text-active-black u-text-hover-black" href="Ingresar.html" style="padding: 22px 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Ingresar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-2-base u-text-active-black u-text-hover-black" style="padding: 22px 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-palette-2-base u-text-active-black u-text-hover-black" href="Casa.html" style="padding: 22px 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Cerrar sesion</a></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-inner-container-layout u-opacity u-opacity-95 u-palette-2-base u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Productos.html" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ingresar.html" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Ingresar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Mi-carrito.html" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Mi carrito</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html" style="padding: 22px 20px; text-shadow: 2px 2px 8px rgba(0,0,0,0.4);">Cerrar sesion</a></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav><div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_dbd7">
      
      
      
      <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item" data-image-width="600" data-image-height="600">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-1" data-image-width="600" data-image-height="600"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1"></div>
          </div>
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item" data-image-width="1761" data-image-height="798">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-2" data-image-width="1761" data-image-height="798"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2"></div>
          </div>
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item u-list-item-3" data-image-width="320" data-image-height="320">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-3" data-image-width="320" data-image-height="320"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3"></div>
          </div>
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item u-list-item-4" data-image-width="300" data-image-height="300">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-4" data-image-width="300" data-image-height="300"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4"></div>
          </div>
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item u-list-item-5" data-image-width="1024" data-image-height="1024">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-5" data-image-width="1024" data-image-height="1024"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5"></div>
          </div>
          <div class="u-container-style u-custom-item u-effect-hover-zoom u-image-contain u-list-item u-repeater-item u-list-item-6" data-image-width="830" data-image-height="447">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-6" data-image-width="830" data-image-height="447"></div>
            </div>
            <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-6"></div>
          </div>
        </div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
      <div class="u-container-style u-expanded-width u-group u-palette-2-base u-shape-rectangle u-group-1">
        <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-7">
          <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-line u-line-horizontal u-line-2"></div>
          <form action="Productos.php" method="POST" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
            <button class="u-search-button" type="submit">
              <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-48f1"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-48f1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
              </span>
            </button>
            <input class="u-search-input" type="text" name="buscador" placeholder="Buscar un Articulo" onKeypress="validacion()" aria-label="Search">
          </form>
          <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="" data-responsive-from="XS">
            <div class="menu-collapse">
              <a class="u-button-style u-custom-color u-nav-link u-text-black" href="#" style="">
                <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7ad4"></use></svg>
                <svg class="u-svg-content" version="1.1" id="svg-7ad4" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
              </a>
            </div>
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-grey-75 u-nav-link" href="Casa.html" style="padding: 10px 14px;">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-grey-75 u-nav-link" style="padding: 10px 14px;">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-grey-75 u-nav-link" style="padding: 10px 16px 10px 14px;">Vinos Populares</a>
</li></ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Vinos Populares</a>
</li></ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
          <h1 class="u-text u-title u-text-1">Vinos Más Populares</h1>
          <nav class="u-align-left u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-2" data-responsive-from="XS">
            <div class="menu-collapse" style="font-weight: 700;">
              <a class="u-button-style u-custom-color u-nav-link u-text-black" href="#">
                <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e40e"></use></svg>
                <svg class="u-svg-content" version="1.1" id="svg-e40e" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
              </a>
            </div>
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Filtrar por:</a>
</li></ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link">Filtrar por:</a>
</li></ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
        </div>
      </div>
      <?php
               $con = new SQLite3("bestwine.db") or die("problemas para conectar");
               $cs = $con -> query("SELECT * FROM vista1 WHERE comodin LIKE '%$buscador%'");
               while($res = $cs -> fetchArray()) {
                    $id= $res['id'];
                    $claveP= $res['claveP'];
                    $nombre= $res['nombre'];
                    $precio= $res['precio'];
                    $piezas= $res['piezas'];
                    echo' 
                    <div class="u-list u-list-2">
                    <div class="u-repeater u-repeater-2">
                      <div class="u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-7" data-animation-out="0">
                        <div class="u-container-layout u-similar-container u-container-layout-8">
                          <img alt="" class="infinite u-bottom-left-radius-20 u-expanded-width u-image u-image-round u-top-right-radius-20 u-image-7" data-image-width="960" data-image-height="960" src="images/'.$claveP.'.jpeg" data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">
                          <h3 class="u-text u-text-default u-text-2">'.$nombre.'</h3>
                          
                          <br>
                          </p>
                          <form action="compra.php" method="POST">
                            <input type="hidden" name="txtCompra" value="'.$nombre.'">
                            <input type="number" name="txtCantidad" max="'.$piezas.'" min="1" value="0" >
                            <input type="hidden" name="txtPrecio" value="'.$precio.'">
                            <input type="hidden" name="txtImg" value="'.$claveP.'">
                            <button type="submit" class="u-border-none u-btn u-button-style u-hover-grey-60 u-palette-2-base u-btn-1">Comprar</button>
                          </form>
                         
                          <p class="u-align-justify u-text u-text-4">$'.$precio.'</p>
                          <br>
                          <br>
                          <p class="u-align-justify u-text u-text-4"> Existencias :'.$piezas.'</p>
                        </div>
                      </div> 
                    </div>
                  </div>            
                     ';
                 }  
               $con -> close();
          ?>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ac45"><p class="u-small-text u-text u-text-variant u-text-1">THE BEST WINE</p></footer>
    <section class="u-backlink u-clearfix u-grey-80">
 
    </section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 5px; bottom: 55px; box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);" class="u-back-to-top u-icon u-icon-circle u-opacity u-opacity-95 u-palette-2-base u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>