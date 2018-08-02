$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.navbar-toggler').addClass('collapsed');
$('#top-menu').addClass('navbar-nav mr-auto');
$('#top-menu li').addClass('nav-item');
$('#top-menu li a').addClass('nav-link');

$('li.menu-item-has-children ul').first().addClass('dropdown-menu');
$('li.menu-item-has-children a').first().addClass('dropdown-toggle');
$('li.menu-item-has-children a').attr( 'data-toggle', 'dropdown' );

$('ul.dropdown-menu ul li.menu-item-has-children a').first().addClass('dropdown-toggle');

$('ul.dropdown-menu ul').addClass( 'dropdown-submenu' ).removeClass('dropdown-menu');




$('.main-banners-container').slick({
	infinite: true,
	dots: true,
	slidesToShow: 1,
	slidesToScroll: 1
});




console.log('ok');