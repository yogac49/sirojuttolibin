$(document).ready(function () {
	$('.sign-in').hide();

	$('.buton-login').on('click', function () {
		$('.regis').hide();
		$('.sign-in').show();
		$('.judul-signin h2').css('font-size', '38px').css(
			'margin', '125px 8px');
		$('.judul-signin p').css(
			'margin-top', '-85px').css('text-align', 'center');
		$('.judul-signin').css('background-color', 'rgb(76, 241, 178)').css('height', '500px').css('border-top-left-radius', '30px').css('border-bottom-left-radius', '30px');

	});

	$('.sign-in .daftar').on('click', function () {
		$('.sign-in').hide();
		$('.regis').show();
	});


	// MOBILE
	$('.mobile-signin').on('click', function () {
		$('.regis').hide();
		$('.judul-signin').hide();
		$('.daftar').hide();
		$('.sign').show();
		$('.sign-in ').show();
	});


	$('.mobile-regis').on('click', function () {

		$('.sign-in').hide();
		$('.regis').show();
	});

});
