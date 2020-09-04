<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

//get_template_part( "pages/productos/seccion1" ); 

// Ensure visibility.
if ( empty( $product ) || false === wc_get_loop_product_visibility( $product->get_id() ) || ! $product->is_visible() ) {
	return;
}
?>


<!-- <div class="col-md-8">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. In labore neque quas perspiciatis delectus iure atque, quia blanditiis a molestiae illo obcaecati vel, quis reiciendis tenetur velit ut earum ea!
		</div>

		<div class="col-md-4">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quo repudiandae laborum consequatur architecto corporis accusantium minus atque enim unde! Totam repellat reiciendis quia perferendis iste, quis accusantium ipsum excepturi.
		</div> -->
	
	<!-- Start producto -->

	
		
                <div class="card-producto">
                    <div class="container-imagen-card-producto">
                        <div id="descuentoCard" class="producto-con-descuento">
                            <p class="valor-descuento">10%</p>
                            <p class="off-descuento">OFF</p>
                        </div>
                        <div class="card-productos-hover">
                            <div class="card-productos-hover-iconos" >
                                <a href="<?php the_permalink( $post ); ?>"><span class="fa fa-search-plus productos-hover-icon"><span></a>

                                <a href="<?php the_permalink( $post ); ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i>
<span class="fa fa-cart-plus productos-hover-icon"><span>Comprar</a>

                                <a href="<?php the_permalink( $post ); ?>"><span class="fa fa-heart productos-hover-icon"><span></a>
                            </div>
                        </div>
                        <?php the_post_thumbnail( 'bones-thumb-product-archive' ); ?>
                        <!-- <img src="./img/paginaProductos/chair.png" class="card-imagen" alt="chair"> -->
                    </div>
                    <h5 class=""><?php the_title(); ?></h5> 
                    <p class="card-producto-texto"><?php the_excerpt(); ?></p>
                    <div class="card-producto-precio">
                        <p class="card-producto-precio-signo">$</p>

                        <?php if ( $price_html = $product->get_price_html() ) : ?>
                        	<p class="card-producto-precio-valor"><?php echo $price_html; ?></p>
						<?php endif; ?>
                        
                    </div>
                </div>
                <!-- Final producto -->

        

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>

