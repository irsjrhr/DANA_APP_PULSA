<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Dana - Gift
	</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>
<body>


	<!-- Container App -->
	<div class="container_app">
		<!-- Box Detail -->
		<div class="box_detail">

			<div class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col_header">
							Send to friend
						</div>
					</div>
				</div>
			</div>

			<div class="body">
				<div class="card_box">
					<div class="container-fluid">
						<div class="row row_img">
							<div class="col_img">
								<img src="asset/gam/user.png" class="user">
								<img src="asset/gam/logo.png" class="logo">
							</div>
							<div class="col col_profile">
								<p> DANA ID </p>
								<p class="number_des" id="phone_number"> - </p>
							</div>
						</div>

						<div class="row row_input">
							<div class="col-12" style="padding: 0;">
								
								<p> SEND AMOUNT </p>
								<input type="text" class="input_dial" name="saldo_dana" placeholder="Rp0">

							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- End Of Box Detail -->

		<!-- Box Dial -->
		<div class="box_dial">

			<div class="container-fluid">
				<div class="row">	

					<?php for ($i=1; $i <= 9; $i++) { ?>
						<div class="col-4 col_dial" data-dial="<?= $i ?>">
							<?= $i ?>
						</div>
					<?php } ?>

				</div>
				<div class="row">
					<div class="col-4 col_dial" data-dial="0">
						0
					</div>

					<div class="col-4 col_dial" data-dial="000">
						000
					</div>
					<div class="col-4 col_dial" data-dial="del">
						<i class="fas fa-backspace"></i>
					</div>
				</div>

				<div class="row">
					<button class="btn btn-default btn_submit" id="btn_submit_dial"> DONE </button>
				</div>
			</div>

			
		</div>
		<!-- End Of Box Dial -->



		<!--+++++++++  Layer Dimension Fly Container App ++++++++++-->

		<!-- App Layer - Auth -->
		<div class="app_layer" style="display:none;" id="app_auth">
			<div class="backdrop"></div>
			<!-- Container App Layer -->
			<div class="container_app_layer">

				<!-- Header Layer -->
				<div class="header_layer">
					<div class="container-fluid">
						<div class="row justify-content-center">
							<img src="asset/gam/logo2.png" style="width:150px;height: 100%;margin-top: 10px;">
						</div>
					</div>
				</div>
				<!-- End Of Header Layer -->

				<!-- body Layer -->
				<div class="body_layer">

					<!-- Layer Auth -->
					<div class="content_layer" id="layer_auth_phone">
						<div class="container-fluid pt-5">
							<div class="row">
								<div class="col-12 text-center">
									<p style="margin-bottom: 0;"> Enter your mobile number to continue </p>
								</div>
							</div>
							<div class="row row_form pl-2">
								<div class="col_form" style="width: 120px;">
									<label> Country </label>
									<div class="box_auth box_phone">
										<div class="img_flag">
											<img src="asset/gam/flag.png">
										</div>
										<div class="text_flag">
											<span> +62 </span>
										</div>
									</div>
								</div>
								<div class="col_form col">
									<label> Number </label>
									<input type="text" class="box_auth"  name="phone_number">
								</div>
							</div>
							<div class="row text-center">
								<div class="col-12">
									<p> We'll be using this mobile number as your ID & to secure your account. Also, by conntinuing you agree with our <b> T&C </b> and <b> Privacy Notice </b> </p>
								</div>
							</div>
						</div>

						<div class="box_submit">
							<button class="btn btn-default btn_submit" id="btn_save_phone">  
								CONTINUE
							</button>
						</div>

					</div>
					<!-- End Of Layer Auth -->
				</div>
				<!--End Of body Layer -->
				<!-- Load Layer -->
				<div class="load_layer">
					<div class="content_load">
						<div class="animasi_load">
						</div>
						<img src="asset/gam/logo.png">
					</div>
				</div>
				<!-- End Of Load Layer -->


			</div>
			<!-- End Of Container App Layer -->
		</div>
		<!-- End Of App Layer - Auth -->


		<!-- App Layer - Transaction -->
		<div class="app_layer" style="display: none;" id="app_transaction">
			<div class="backdrop"></div>
			<!-- Container App Layeer -->
			<div class="container_app_layer">


				<!-- Header Layer -->
				<div class="header_layer">
					<div class="container-fluid">
						<div class="row justify-content-center">
							<img src="asset/gam/logo.png" style="width:50px;height: 50px;">
							<h3 class="mt-2"> PAY </h3>	
						</div>
					</div>
				</div>
				<!-- End Of Header Layer -->
				<!-- body Layer -->
				<div class="body_layer">

					<?php require_once 'appContentLayer_trans.php'; ?>

				</div>
				<!--End Of body Layer -->
				<!-- Load Layer -->
				<div class="load_layer">
					<div class="content_load">
						<div class="animasi_load">
						</div>
						<img src="asset/gam/logo.png">
					</div>
				</div>
				<!-- End Of Load Layer -->
			</div>
			<!-- End Of Container App Layeer -->
		</div>
		<!-- End Of App Layer - Transaction -->

		<!-- End Of Layer Dimension Fly Container App -->




	</div>
	<!-- End Of Container App -->



	<script type="text/javascript" src="asset/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
	<script type="text/javascript">
		function formatRupiah(angka) {
			const format = new Intl.NumberFormat('id-ID', {
				style: 'currency',
				currency: 'IDR'
			});
			return format.format(angka);
		}

		function get_number( val ) {
			var str = formatRupiah( val );
			str = str.split(",");
			return str[0];
		}	
		function formatNumberPhone( numberString ) {
			// Remove any existing hyphens to avoid duplication
			let cleanedString = numberString.replace(/-/g, '');

			// Split the string into chunks of 4 characters
			let formattedString = cleanedString.match(/.{1,4}/g)?.join('-') || cleanedString;

			return formattedString;
		}


		// +++++++++ Fungsi App Layer Yang Sesuai skema 
		function open_app_layer( app_layer_target, content_layer_target = false ) {
			var app_layer_target = $( app_layer_target );
			var app_layer_target_id = app_layer_target.attr('id');
			var container_app_layer = app_layer_target.find('.container_app_layer');	


			//Hilangkan app_layer yang sedang aktif
			close_app_layer();

			//Munculkan app_layer target
			app_layer_target.addClass('active');
			setTimeout(function(e) {
				container_app_layer.addClass('active');
			}, animasi_transisi)

			//++++++ Munculkan content layer pada content_app_layer

			//Pilih content layer target dengan logika aman
			if ( content_layer_target != false ) {
				content_layer_target = $(content_layer_target);
			}else{
				//Jika tidak ada content layer yang dipilih, maka pilih di elemen yang pertema content layeer pada app layer tersebbut
				content_layer_target = container_app_layer.find('.content_layer').eq(0);

			}

			//Error Handling
			if ( content_layer_target.length < 1 ) {
				var msg_err = "Tidak ada element content layer yang dituju atau bisa dibuka pada app layer yang dibuka";
				console.log(msg_err);
				alert(msg_err);
			}

			open_contentLayer( content_layer_target );
			

		}

		function close_app_layer() {

			//Hilangkan app_layer yang sedang aktif
			var app_layer = $('.app_layer').filter('.active');
			var container_app_layer = app_layer.find('.container_app_layer');

			container_app_layer.removeClass('active');
			setTimeout(function(e) {
				app_layer.removeClass('active');
			}, animasi_transisi)


		}
		function open_loadLayer() {
			var load_layer = $('.load_layer');
			load_layer.show();
		}
		function close_loadLayer() {
			var load_layer = $('.load_layer');
			load_layer.hide();
		}

		function load_layer(callback, timer) {
			open_loadLayer();
			setTimeout( function() {
				callback();
				close_loadLayer();
			}, timer );
		}

		function open_contentLayer( id,  effect = "none", callback = false) {
			if ( callback == false ) {
				callback = function() {
					return 1;
				}
			}

			var content_layer_target = $( id );
			var content_layer_active = $('.content_layer').filter('.active');


			load_layer( function() {
				//Menghilangkan content layer yang active dan hilangkan tandanya
				content_layer_active.hide();
				content_layer_active.removeClass('active');
				//Mengaktifkan content layer yang dituju dan berikan tandanya
				content_layer_target.show(effect);
				content_layer_target.addClass('active');
			}, 300);

			callback();
		}
		function validasi_phoneNumber() {
			//Validasi agar bisa lanjut ke app layer transakasi 
			var input_phone = $('input[name=phone_number]');
			var phone_number = input_phone.val();
			var param_validasi;
			if ( phone_number.length > 0 ) {
				param_validasi = true;
				$('#phone_number').text( phone_number );
			}else{
				param_validasi = false;
			}

			return param_validasi;
		}


		var animasi_transisi;
		$(document).ready(function(e) {
			$('input').val("");

			var input_dial = $(".input_dial");
			input_dial.val("");
			input_dial.prop('readonly', true);

			var dial_db = "";
			$('.col_dial').on('click', function(e) {
				var col_dial = $(this);
				var data_dial = col_dial.attr('data-dial');

				if ( data_dial != "del" ) {
					//Input dial
					console.log("Input dial");

					//Update ke konstan
					dial_db += data_dial;

				}else{
					//Hapus dial
					console.log("Hapus dial");


					if ( dial_db.length < 1 ) {
						console.log("Tidak ada karakter yang di hapus");
						return false;
					}

					var dial_del = dial_db.split("");
					var del_char = dial_del.pop();
					dial_del = dial_del.join("");

					//Update ke dial_db 
					dial_db = dial_del;

				}

				//Ubah format dan tampilkan 
				var dial_output = get_number( dial_db );
				input_dial.val( dial_output );
				
				console.log( "Dial DB :" + dial_db );
				console.log("+++++++++++++++++++");
			});





			// +++++++++++++++  METHOD EVENT UNTUK APP LATER ++++++++++
			//Membuat callback delay
			animasi_transisi = $('.container_app_layer').css('transition-duration');
			animasi_transisi = animasi_transisi.split("s");
			animasi_transisi = animasi_transisi[0];
			animasi_transisi = parseFloat( animasi_transisi );
			animasi_transisi = animasi_transisi * 1000; //Karena 1 s = 1000ms

			$('.app_layer .backdrop').on('click', function(e) {
				close_app_layer();
			});


			//+++++++ App Layer Auth ++++++++++
			// open_app_layer("#app_auth");
			$('input[name=phone_number]').on('keyup', function() {
				var input_number = $(this);
				var value = input_number.val();	
				var format_number = formatNumberPhone( value );

				input_number.val( format_number );
			});
			$('#btn_save_phone').on('click', function(e) {
				load_layer(function() {
					var validasi_phone = validasi_phoneNumber();
					if ( validasi_phone == true ) {
						close_app_layer();
					}
				}, 300);

			});
			//+++++++ App Layer Transaction ++++++++++
			$('#btn_submit_dial').on('click', function(e) {
				var validasi = validasi_phoneNumber();
				console.log("Belum memasukkan nomor telpon");
				if ( validasi == true ) {
					open_app_layer('#app_transaction');
				}else{
					open_app_layer('#app_auth', '#layer_auth_phone');
				}
			});
			$('#app_transaction #layer_confirm .btn_submit').on('click', function(e) {

				//Pindah layer 

				//Validasi login facebook result 
				open_loadLayer();
				// var layer_target = $('#layer_process');	
				// open_contentLayer(layer_target, "slide");
			});

		});





	</script>
</body>
</html>