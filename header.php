<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
    
    <header class="header">
        <div class="header-barraSuperio">
            <div class="header-barraSuperio-social">
                <a href="#" class="iconHeader"><span class="fa fa-facebook"></span></a>
                <a href="#" class="iconHeader"><span class="fa fa-instagram"></span></a>
                <a href="#" class="iconHeader"><span class="fa fa-youtube"></span></a>
                <a href="#" class="iconHeader"><span class="fa fa-whatsapp"></span></a>
            </div>
            
            <div class="header-barraSuperio-log">
                <div class="">
                    <div class="header-barraSuperio-log-elemento"> 
                        <div class="header-barraSuperio-log-btn"><button id="btnLogin"><span class="iconHeader iconLogin far fa-user"></span> INGRESAR</button>
                            <div id="login" class="login-cerrado">
                                <form class="contendor-form-login" action="">
                                    <h5>MI CUENTA</h5>
                                    <div class="form-login-inputs">
                                            <label for="usuario">USUARIO</label>
                                            <input type="text" name="usuario" id="usuario">
                                            <label for="password">CONTRASEÑA</label>
                                            <input type="password" name="password" id="password">
                                            <ul>
                                                <li><a href="/">OLVIDE MI CONTRASEÑA</a></li>
                                                <li><a href="/">CREAR UNA CUENTA</a></li>
                                            </ul>
                                    </div>
                                    <div>
                                        <button class="btn-ingresar">INGRESAR</button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        
                        <div class="header-barraSuperio-log-btn"><button id="btnCarrito"><span class="iconHeader iconLogin fas fa-cart-plus"></span>CARRITO (3)</button>
                            <div id="carritoActivo" class="btn-carrito-inactivo">
                                <h5>PRODUCTOS EN TU CARRITO</h5>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                    <div class="producto-en-carrito">
                                        <img class="producto-en-carrito-imagen" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/paginaProducto/aspiradora2.png" alt="carrito-imagen-producto">
                                        <div class="producto-en-carrito-producto" >
                                            <h6>ASPIRADORA KARCHER WD1</h6>
                                            <select name="" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="producto-en-carrito-valor" >
                                            <p>600,000</p>
                                            <button class="btnBorrar"><span class="far fa-trash-alt"></span></button>
                                        </div>
                                    </div>
                                <div class="carrito-activo-resumen">
                                    <div class="carrito-activo-resumen-item">
                                        <p>ENVIO</p>
                                        <p>$598</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item">
                                        <p>IMPUESTO</p>
                                        <p>$199</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item">
                                        <p>COMPRA</p>
                                        <p>$139</p>
                                    </div>
                                    <div class="carrito-activo-resumen-item carrito-activo-resumen-total">
                                        <p>TOTAL</p>
                                        <p>$1,150,000</p>
                                    </div>
                                </div>
                                <a class="btn-irACarrito" href="carrito.php">IR AL CARRITO</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="header-barraInferio">
            <div>
                <a href="<?php echo home_url( '/'); ?>">
                <img class="logo-expofer" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo.png" alt="logo Expofer">
                </a>
            </div>
            <div id="btnMenu" class="menu-icon">
                <span  class="menu-icon fas fa-bars"></span>
            </div>
            
            <!-- MENU -->
            <nav id="nav" class="nav-header">

            <?php 

                wp_nav_menu(array(
                    'container' => false,                           // remove nav container
                    'container_class' => 'menu clearfix',  
                    'menu_id' => 'contenedorNav',         // class of container (should you choose to use it)
                    'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                    'menu_class' => 'contenedor-nav',         // adding custom nav class
                    'theme_location' => 'main-nav',                 // where it's located in the theme
                    'before' => '',                                 // before the menu
                    'after' => '',                                  // after the menu
                    'link_before' => '',                            // before each link
                    'link_after' => '',                             // after each link
                    'depth' => 0,  
                                                   // limit the depth of the nav
                    'fallback_cb' => 'bones_main_nav_fallback'      // fallback function
                ));
             ?>
            </nav>

           <!--  <nav id="nav" class="nav-header">
                <ul id="contenedorNav" class="contenedor-nav">
                    <li id="btnInicio" class="link-nav">
                        <a class="" href="index.php"><strong>INICIO</strong></a>
                    </li>
                    <li id="btnProductos" class="link-nav">
                        <a class="" href="productos.php"><strong>PRODUCTOS</strong></a>
                    </li>
                    <li id="btnServicioTecnico" class="link-nav">
                        <a class="" href="servicioTenico.php"><strong>SERVICIO TÉCNICO</strong></a>
                    </li>
                    <li id="btnNosotros" class="link-nav">
                        <a class="link-nav" href="nosotros.php"><strong>NOSOTROS</strong></a>
                    </li>
                    <li id="btnAccesorios" class="link-nav">
                        <a class="" href="#"><strong>ACCESORIOS</strong></a>
                    </li>
                    <div id="navMenu" class="nav-inactivo">
                        <div class="contenedor-nav-activo">
                            <div class="contenedor-nav-activo-primera">
                                <h5 class="link-nav-activo">PRODUCTOS</h5>
                                <div class="contenedor-nav-activo-primera-lista">
                                    <ul><h6>CATEGORIAS</h6>
                                        <li><a href="/">Hidrolavadoras</a></li>
                                        <li><a href="">Compresores</a></li>
                                        <li><a href="">Bombas</a></li>
                                        <li><a href="">Plantas eléctricas</a></li>
                                        <li><a href="">Aspiradoras</a></li>
                                        <li><a href="">Guadañadoras</a></li>
                                        <li><a href="">Motosierras</a></li>
                                        <li><a href="">Cortasetos</a></li>
                                        <li><a href="">Fumigadoras</a></li>
                                        <li><a href="">Sopladora</a></li>
                                        <li><a href="">Cortasesped</a></li>
                                        <li><a href="">Teractores</a></li>
                                        <li><a href="">Limpiadores a vapor</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contenedor-nav-activo-segunda">
                                <h6>PRODUCTOS DESTACADOS</h6>
                                <div class="menu-cards">
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/bidon.png" alt="Prducto Bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/bidon.png" alt="bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                    <div class="menu-card">
                                        <img class="imagen-menu-abierto" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/bidon.png" alt="bidon">
                                        <h6>BIDON</h6>
                                        <p>Accesorios para Motosierras </p>
                                        <div class="card-precio">
                                            <p class="signo-pesos">$</p>
                                            <p class="menu-card-valor">230.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav> -->
            <form action="#" id="search" class="search">
                <input id="searchInput" type="text" class="search-input" label="search" placeholder="Buscar">
                <button id="buscarBtn" type="submit" class="search-btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/buscar.png" alt="buscar"></button>
            </form>
        </div>
    </header>

		<!-- <div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div>

			</header> -->
