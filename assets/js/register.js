$('#cek').on('click', function () {
	const username = $('#username').val();

	$.ajax({
		url: "http://localhost/ppdb-insan-kamil/auth_user/requestAjax",
		method: 'post',
		dataType: 'json',
		data: {
			username: username
		},
		success: function (data) {

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

$(function () {

	// ayah_ibu
	$('.ayah_ibu').hide();
	$('.simpan').hide();
	$('.kembali1').hide();

	$('.lanjut1').on('click', function () {
		$('.anak').hide();
		$('.lanjut1').hide();
		$('.kembali1').show();
		$('.ayah_ibu').show();
		$('.simpan').show();
	})

	$('.kembali1').on('click', function () {
		$('.anak').show();
		$('.lanjut1').show();
		$('.kembali1').hide();
		$('.ayah_ibu').hide();
		$('.simpan').hide();
	})

})
