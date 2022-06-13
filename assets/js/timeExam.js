const tigaPuluhMenit = new Date().getTime() + 60 * 60 * 1000;
const hitung = setInterval(function () {
	const timeNow = new Date().getTime();
	const selisihTime = tigaPuluhMenit - timeNow;
	const hari = Math.floor(selisihTime / (1000 * 60 * 60 * 24));
	const jam = Math.floor(selisihTime % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
	const menit = Math.floor(selisihTime % (1000 * 60 * 60) / (1000 * 60));
	const detik = Math.floor(selisihTime % (1000 * 60) / 1000);



	let waktu = document.getElementById('waktu');
	let myForm = document.getElementById('form');
	waktu.style.color = 'white';
	waktu.innerHTML = `Waktu anda : ${menit} Menit ${detik} Detik`;

	if (selisihTime <= 0) {
		clearInterval(hitung);
		alert('Moho maaf waktu anda habis!');
		setTimeout(() => {
			myForm.submit();
		}, 100);
	}
}, 1000);
