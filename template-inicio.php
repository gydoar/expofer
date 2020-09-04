<?php
/*
Template Name: Pagina de inicio
*/
?>

<?php get_header(); ?>

<!-- Banner -->
<?php get_template_part( 'pages/home/seccion1'); ?>
<?php get_template_part( 'pages/home/categorias' ); ?>
<?php get_template_part( 'pages/home/accesorios' ); ?>
<?php get_template_part( 'pages/home/nosotros' ); ?>
<?php get_template_part( 'pages/home/marcas' ); ?>
<?php get_template_part( 'mapa' ); ?>

<?php //include('./pages/home/seccion1.php'); ?>
<?php //include('./pages/home/categorias.php'); ?>
<?php //include('./pages/home/accesorios.php'); ?>
<?php //include('./pages/home/nosotros.php'); ?>
<?php //include('./pages/home/marcas.php'); ?>

        
        
        
        <!-- Modulo del Mapa-->
        <?php //include('mapa.php'); ?>
                <!-- /Modulo del Mapa-->

<?php get_footer(); ?>
