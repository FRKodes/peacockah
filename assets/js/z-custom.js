jQuery('.menu-menu-top-container').addClass('collapse navbar-collapse');
jQuery('.navbar-toggler').addClass('collapsed');
jQuery('#top-menu').addClass('navbar-nav mr-auto');
jQuery('#top-menu li').addClass('nav-item');
jQuery('#top-menu li a').addClass('nav-link');

jQuery('li.main-prods').addClass('dropdown');
jQuery('li.main-prods a').first().addClass('dropdown-toggle').attr('id', 'navbarDropdownMenuLink').attr('data-toggle', 'dropdown');
// jQuery('li.main-prods a').first().attr('data-toggle', 'dropdown');


jQuery('li.main-prods ul').first().attr('aria-labelledby','navbarDropdownMenuLink').addClass('dropdown-menu');
jQuery('.submenu-toggler .sub-menu').addClass('dropdown-menu');
jQuery('.biologicos a').first().addClass('dropdown-toggle');
jQuery('.farmaceuticos a').first().addClass('dropdown-toggle');
jQuery('.especie-menu a').first().addClass('dropdown-toggle');
jQuery('.submenu-toggler').first('a').on('click', function (e) {
	e.stopPropagation();
	console.log('clicked and stopped!');
	jQuery(this).next().toggleClass('show');
});

jQuery('.main-prods a').on('click', function () {
	jQuery('.submenu-toggler .dropdown-menu').removeClass('show');
});

jQuery('select#products-selector').change(function(){
	if (jQuery(this).val() !== 0) {
		window.location.href = jQuery(this).val();
	}
});

jQuery('.flag a').on('click', function(){
	jQuery('.flag').removeClass('show-this');
	jQuery(this).parent().addClass('show-this');
});

/*
 *OOK
 */

$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');

  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });

  return false;
});

jQuery('.main-banners-container').slick({
	infinite: true,
	dots: true,
	autoplay: true,
	slidesToShow: 1,
	slidesToScroll: 1
});

jQuery('.promos-container').slick({
	infinite: true,
	dots: true,
	autoplay: true,
	slidesToShow: 1,
	slidesToScroll: 1
});

console.log('ok');