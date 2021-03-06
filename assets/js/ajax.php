<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {
		tampilPegawai();
		tampilPosisi();
		tampilKota();
		tampilPayment();
		tampilUser();
		tampilContents();
		tampilService();
		tampilUserdetails();
		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilPegawai() {
		$.get('<?php echo base_url('Pegawai/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-pegawai').html(data);
			refresh();
		});
	}

	var id_pegawai;
	$(document).on("click", ".konfirmasiHapus-pegawai", function() {
		id_pegawai = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPegawai", function() {
		var id = id_pegawai;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pegawai/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPegawai();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPegawai", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pegawai/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-pegawai').modal('show');
		})
	})

	$('#form-tambah-pegawai').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pegawai/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-pegawai").reset();
				$('#tambah-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-pegawai', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pegawai/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-pegawai").reset();
				$('#update-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Kota
	function tampilKota() {
		$.get('<?php echo base_url('Kota/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-kota').html(data);
			refresh();
		});
	}

	var id_kota;
	$(document).on("click", ".konfirmasiHapus-kota", function() {
		id_kota = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataKota", function() {
		var id = id_kota;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilKota();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-kota').modal('show');
		})
	})

	$(document).on("click", ".detail-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-kota').modal('show');
		})
	})

	$('#form-tambah-kota').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Kota/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilKota();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-kota").reset();
				$('#tambah-kota').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	//Posisi
	function tampilPosisi() {
		$.get('<?php echo base_url('Posisi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-posisi').html(data);
			refresh();
		});
	}

	var id_posisi;
	$(document).on("click", ".konfirmasiHapus-posisi", function() {
		id_posisi = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPosisi", function() {
		var id = id_posisi;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPosisi();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPosisi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-posisi').modal('show');
		})
	})

	$(document).on("click", ".detail-dataPosisi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-posisi').modal('show');
		})
	})

	$('#form-tambah-posisi').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Posisi/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPosisi();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-posisi").reset();
				$('#tambah-posisi').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-posisi', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Posisi/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPosisi();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-posisi").reset();
				$('#update-posisi').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	
	//User
	function tampilUser() {
		$.get('<?php echo base_url('User/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-user').html(data);
			refresh();
		});
	}

	var id_user;
	$(document).on("click", ".konfirmasiHapus-user", function() {
		id_user = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataUser", function() {
		var id = id_user;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilUser();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataUser", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-user').modal('show');
		})
	})

	$(document).on("click", ".detail-dataUser", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-user').modal('show');
		})
	})

	$('#form-tambah-user').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('User/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-user").reset();
				$('#tambah-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	$('#tambah-user').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-user').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	
	
	
		$(document).on('submit', '#form-update-user', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('User/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-user").reset();
				$('#update-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

		//Payment
	function tampilPayment() {
		$.get('<?php echo base_url('Payment/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-payment').html(data);
			refresh();
		});
	}

	var id_payment;
	$(document).on("click", ".konfirmasiHapus-payment", function() {
		id_payment = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPayment", function() {
		var id = id_payment;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Payment/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPayment();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPayment", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Payment/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-payment').modal('show');
		})
	})

	$(document).on("click", ".detail-dataPayment", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Payment/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-payment').modal('show');
		})
	})

	$('#form-tambah-payment').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('payment/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPayment();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-payment").reset();
				$('#tambah-payment').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	$('#tambah-payment').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-payment').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	
	
	
		$(document).on('submit', '#form-update-payment', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Payment/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPayment();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-payment").reset();
				$('#update-payment').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	//Content
	function tampilContents() {
		$.get('<?php echo base_url('Contents/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-contents').html(data);
			refresh();
		});
	}

	var id_contents;
	$(document).on("click", ".konfirmasiHapus-contents", function() {
		id_contents = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataContents", function() {
		var id = id_contents;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Contents/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilContents();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataContents", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Contents/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-contents').modal('show');
		})
	})

	$(document).on("click", ".detail-dataContents", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Contents/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-contents').modal('show');
		})
	})

	$('#form-tambah-contents').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('contents/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilContents();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-contents").reset();
				$('#tambah-contents').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	$('#tambah-contents').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-contents').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
	
	
	$(document).on('submit', '#form-update-contents', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Contents/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilContents();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-contents").reset();
				$('#update-contents').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
		//Service
	function tampilService() {
		$.get('<?php echo base_url('Service/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-service').html(data);
			refresh();
		});
	}

	var id_service;
	$(document).on("click", ".konfirmasiHapus-service", function() {
		id_service = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataService", function() {
		var id = id_service;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Service/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilService();
			$('.msg').html(data);
			effect_msg();
		})
	})
	$(document).on("click", ".update-dataService", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Service/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-service').modal('show');
		})
	})

	$(document).on("click", ".detail-dataService", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Service/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-service').modal('show');
		})
	})

	$('#form-tambah-service').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Service/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilService();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-service").reset();
				$('#tambah-service').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	$('#tambah-service').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-service').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$(document).on('submit', '#form-update-service', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Service/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilService();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-service").reset();
				$('#update-service').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	

//Userdetails
	function tampilUserdetails() {
		$.get('<?php echo base_url('Userdetails/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-userdetails').html(data);
			refresh();
		});
	}

	var id_userdetails;
	$(document).on("click", ".konfirmasiHapus-userdetails", function() {
		id_userdetails = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataUserdetails", function() {
		var id = id_userdetails;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Userdetails/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilUserdetails();
			$('.msg').html(data);
			effect_msg();
		})
	})
	$(document).on("click", ".update-dataUserdetails", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Userdetails/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-userdetails').modal('show');
		})
	})

	$(document).on("click", ".detail-dataUserdetails", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Userdetails/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-userdetails').modal('show');
		})
	})

	$('#form-tambah-userdetails').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Userdetails/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUserdetails();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-userdetails").reset();
				$('#tambah-userdetails').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	$('#tambah-userdetails').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-userdetails').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$(document).on('submit', '#form-update-userdetails', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Userdetails/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUserdetails();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-userdetails").reset();
				$('#update-userdetails').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
		
</script>