  'use strict';
$(document).ready(function () {
//Basic alert

	// document.querySelector('.ubah-password').onclick = function(){
	// 	swal("PASSWORD BERHASIL DI UBAH!", "klik OK untuk Kembali", "success");
	// };




		$('#openBtn').on('click',function () {
			$('#myModal').modal({
				show: true
			})
		});

		$(document).on('show.bs.modal', '.modal', function (event) {
			var zIndex = 1040 + (10 * $('.modal:visible').length);
			$(this).css('z-index', zIndex);
			setTimeout(function() {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		});
	});
  