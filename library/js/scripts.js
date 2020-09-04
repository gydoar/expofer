/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop == 'float') prop = 'styleFloat';
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		}
		return this;
	}
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it, so be sure to research and find the one
	that works for you best.
	*/
	
	/* getting viewport width */
	var responsive_viewport = $(window).width();
	
	/* if is below 481px */
	if (responsive_viewport < 481) {
	
	} /* end smallest screen */
	
	/* if is larger than 481px */
	if (responsive_viewport > 481) {
	
	} /* end larger than 481px */
	
	/* if is above or equal to 768px */
	if (responsive_viewport >= 768) {
	
		/* load gravatars */
		$('.comment img[data-gravatar]').each(function(){
			$(this).attr('src',$(this).attr('data-gravatar'));
		});
		
	}
	
	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {
	
	}
	
	
	// add all your scripts here
	
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );





// Código Cristian
//login
let btnlogin = document.getElementById('btnLogin');
let login = document.getElementById('login');

const loginActivo = 'login-abierto';

btnlogin.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseover', function(){
    login.className = (loginActivo)
})

login.addEventListener('mouseout', function (){
    login.classList.remove(loginActivo);
    login.className = ('login-cerrado');
})


//carrito
let btnCarrito = document.getElementById('btnCarrito');
let contenedorCarrito = document.getElementById('carritoActivo');

let carritoActivo = 'btn-carrito-activo';
let carritoInActivo = 'btn-carrito-inactivo';

let contadorCarrito = 0;

btnCarrito.addEventListener('click', function(){
    if(contadorCarrito ==0){
        contenedorCarrito.className = (carritoActivo);
        contadorCarrito = 1;

    }else{
        contenedorCarrito.classList.remove(carritoActivo);
        contenedorCarrito.className = (carritoInActivo);
        contadorCarrito = 0;
    }
})



//nav

let btnInicio = document.getElementById('btnInicio');
let navMenu = document.getElementById('navMenu');

btnInicio.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseover', function(){
    btnInicio.className = ('link-nav-activo');
    navMenu.className = ('nav-activo');
})

navMenu.addEventListener('mouseout', function(){
    btnInicio.classList.remove('link-nav-activo');
    navMenu.classList.remove('nav-activo');
    btnInicio.className = ('link-nav')
    navMenu.className = ('nav-inactivo');

})

//nav responsive

let btnMenu = document.getElementById('btnMenu');
let menu = document.getElementById('nav');
let contadorMenu=0;

btnMenu.addEventListener('click', function(){
    if(contadorMenu == 0){
        menu.className = ('nav-responsive-abierto');
        contadorMenu = 1;
    }else{
        menu.classList.remove('nav-responsive-abierto');
        menu.className = ('nav-header')
        contadorMenu = 0;
        console.log(contadorMenu)
    }

})


//leer el texto del input buscar
document.getElementById('buscarBtn').addEventListener('click', (e) =>{
    e.preventDefault();

const textoBuscador = document.getElementById('searchInput').value;
console.log(textoBuscador);
})



$('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }       
            })