<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>




<section class="Seccion-presentacionProducto">

	<div class="col-md-8">

		<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>


    <!-- <div class="container-slider-fotos">
        <ul class="slider">
            <li id="slide1">
                <div class="imagenes-producto-grande">
                    <div id="descuentoCard" class="producto-con-descuento descuento-slider">
                        <p class="valor-descuento">10%</p>
                        <p class="off-descuento">OFF</p>
                    </div>
                    <img src="./img/paginaProducto/aspiradora.png" alt="aspiradora">
                </div>
            </li>
            <li id="slide2">
                <div class="imagenes-producto-grande">
                    <div id="descuentoCard" class="producto-con-descuento descuento-slider">
                        <p class="valor-descuento">10%</p>
                        <p class="off-descuento">OFF</p>
                    </div>
                    <img src="./img/paginaProducto/bolsa.png" alt="bolsa">
                </div>
            </li>
            <li id="slide3">
                <div class="imagenes-producto-grande">
                    <div id="descuentoCard" class="producto-con-descuento descuento-slider">
                        <p class="valor-descuento">10%</p>
                        <p class="off-descuento">OFF</p>
                    </div>
                    <img src="./img/paginaProducto/filtro.png" alt="filtro">
                </div>
            </li>
        </ul>
        <ul class="menu-slider">
            <li>
                <a href="#slide1"><img  class="imagenes-producto-lateral" src="./img/paginaProducto/aspiradora.png" alt="aspiradora"></a>
            </li>
            <li>
                <a href="#slide2"><img  class="imagenes-producto-lateral" src="./img/paginaProducto/aspiradora.png" alt="aspiradora"></a>
            </li>
            <li>
                <a href="#slide3"><img  class="imagenes-producto-lateral" src="./img/paginaProducto/aspiradora.png" alt="aspiradora"></a>
            </li>
            <li>
                <a href="#slide4"><img  class="imagenes-producto-lateral" src="./img/paginaProducto/aspiradora.png" alt="aspiradora"></a>
            </li>
        </ul>
    </div> -->
	</div>


	<div class="col-md-4">

        <div class="">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
        
        do_action( 'woocommerce_single_product_summary' );
        ?>
        <hr>
        <div class="presentacionProducto-agregar-carrito-cajaBaja">
            <h6>SOBRE EL ENVIO:</h6>
            <P>Realizamos despachos a nivel nacional. Las entregas se realizan en los siguientes 7 días hábiles, después de hacer el check out y pago de la compra.</P>
        </div>
    </div>


     <!-- <div class="presentacionProducto-agregar-carrito">
        <div class="presentacionProducto-agregar-carrito-cajaSuperio">
            <h6><?php the_title(); ?></h6>
            <div class="presentacionProducto-agregar-carrito-precio">
                <p class="precio-signo">$</p>
                <?php if ( $price_html = $product->get_price_html() ) : ?>
                	<p class="precio-valor"><?php echo $price_html; ?></p>
				<?php endif; ?>
                
            </div>
            <div class="presentacionProducto-agregar-carrito-referencia">
                <div class="contenedor-referencia">
                    <p class="referencia-titulo">Categoría :  </p>
                    <p class="referencia-valor">Aspiradoras</p>
                </div>
                <div class="contenedor-referencia">
                    <p class="referencia-titulo">Marca : </p>
                    <p class="referencia-valor">Karcher</p>
                </div>
            </div>
        </div>
        <div class="presentacionProducto-agregar-carrito-cajaMedio">
            <div class="contenedor-agregarAlCarrito">
                <div class="cantidad">
                    <h6 class="titulo-cantidad">CANTIDAD:</h6>
                    <select class="caja-cantidad" name="cantidad" id="cantidad">
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
                <button class="cantidad-agregarAlCarrito" >AGREGAR AL CARRITO</button>
            </div>
        </div>
        <div class="presentacionProducto-agregar-carrito-cajaBaja">
            <h6>SOBRE EL ENVIO:</h6>
            <P>Realizamos despachos a nivel nacional. Las entregas se realizan en los siguientes 7 días hábiles, después de hacer el check out y pago de la compra.</P>
        </div>
    </div> -->

    <!-- Columns -->
	</div>


</section>


	

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
