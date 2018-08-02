$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.navbar-toggler').addClass('collapsed');
$('#top-menu').addClass('navbar-nav mr-auto');
$('#top-menu li').addClass('nav-item');
$('#top-menu li a').addClass('nav-link');
$('li.menu-item-has-children ul').addClass('dropdown-menu');
$('li.menu-item-has-children a').addClass('dropdown-toggle');
$('li.menu-item-has-children a').attr( 'data-toggle', 'dropdown' );


console.log('ok');