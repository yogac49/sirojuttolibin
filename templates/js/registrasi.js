$('#cek').on('click', function () {
	const username = $('#username').val();

	$.ajax({
		url: "http://localhost/ppdb-online/auth_user/requestAjax",
		method: 'post',
		dataType: 'json',
		data: {
			username: username
		},
		success: function (data) {
			console.log(data);

			if (data === null) {
				$('.null').removeClass('text-danger');
				$('.null').addClass('text-success');
				$('.null').html('Username tersedia.');
			} else {
				$('.null').removeClass('text-success');
				$('.null').addClass('text-danger');
				$('.null').html('Username sudah terdaftar!');
				$('#username').val('');
			}
		}
	});
});
$('.eye-close').hide();
// EYE OPEN
$('.eye-open').on('click', function () {
	$('.eye-close').show();
	$('.eye-open').hide();
	$('#password1').attr('type', 'text');
});

$('.eye-close').on('click', function () {
	$('.eye-close').hide();
	$('.eye-open').show();
	$('#password1').attr('type', 'password');
});
