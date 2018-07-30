$('.menu-menu-top-container').addClass('collapse navbar-collapse');
$('.navbar-toggler').addClass('collapsed');
$('#top-menu').addClass('navbar-nav mr-auto');
$('#top-menu li').addClass('nav-item');
$('#top-menu li a').addClass('nav-link');

$('.navbar-toggler').on('click', function(){
	console.log('clicked!')
});
console.log('ok');