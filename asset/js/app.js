	$(document).ready(function(e) {

		//Membuat nav header menjadi responsive widthnya
		sesuaikan_nav_header();	


		$('.btn_sidebar').on('click', function(e) {
			sidebar_toggle();

		});

		$('.link_read').on('click', function(e) {
			var link_read = $(this);
			var box_deskripsi = link_read.parents('.box_deskripsi');
			var content = box_deskripsi.find('.content');
			if( content.is('.text_flow_multi3') ){
				//Jika deskripsi text singkat, atau ada text flow multi nya, maka tutup dan jadikan text pendek 
				link_read.text('Close');
				content.removeClass('text_flow_multi3');
			}else{
				//Jika deskripsi text panjang, atau tidaks ada text flow multi nya, maka buka dan jadikan text panjang 
				link_read.text('Read More');
				content.addClass('text_flow_multi3');
			}

		});



		// ======================== ADMIN FUNCTION ========================================
		$('table .btn_opt').on('click', function(e) {
			var btn_opt = $(this);
			var td = btn_opt.parents('td');
			var menu_opt = td.find('.menu_opt');
			menu_opt.show( function() {
				$('html').bind('click', function(e) {
					var target = $(e.target);
					var obj_is_menu = target.is('.menu_opt');
					if ( obj_is_menu == false ) {
						//Jika yang di klik bukan area dalam menu yang sedang di buka, maka tutup menu ini 
						menu_opt_hide( menu_opt );

					}
				});				
			});
		});
		$('.menu_opt .close_opt').on('click', function(e) {

			var close_opt = $(this);
			var menu_opt = close_opt.parents('.menu_opt');
			menu_opt_hide( menu_opt );
		});
	})

	function sesuaikan_nav_header() {
		nav_header = $('.nav_header');
		var parent_patokan = nav_header.parents('.content');
		var lebar_parent = parent_patokan.css('width');
		nav_header.css('width', lebar_parent);
	}
	function menu_opt_hide( menu_opt ) {
		menu_opt.hide();
		$('html').unbind('click');
	}
	function sidebar_toggle() {
		var sidebar = $('.col_sidebar');
		if ( sidebar.is(':visible') == false ) {
			//Jika sidebar lagi tertutup, maka munculkan
			sidebar_show( sidebar );
		}else{
			//Jika sidebar lagi terbuka, maka tertutup
			sidebar_hide( sidebar );

		}

		responsive_content_toggle( sidebar );
	}

	function sidebar_show( sidebar ) {



		sidebar.show( function() {

			// Efek binding untuk trigger sidebar ketika klik bukan elemen sidebar hanya berlaku ketika sidebar ini berada di mode responsie mobile, ditandai dengan nilai positionnya yaitu "fixed"
			if ( sidebar.css('position') == "fixed" ) {
				console.log("Berada pada mode mobile, maka trigger sukses jalan!");
				//Jika berada pada mode responsive mobile, maka jalankan triger binding html
				$('html').bind('click', function(e) {
					var target = $(e.target);
					var obj_is_sidebar = target.is( sidebar ) || target.is( sidebar.find('*') ); //Jika object yang di klik adalah sidebar atau anaknya, maka akan menghasilkan true, tapi jika bukan maka akan menghasilkan false
					//Jika yang di klik merupakan bukan object sidebar atau childnya, maka tutupnya 
					if ( obj_is_sidebar == false ) {
						sidebar_hide( sidebar );	
					}
				});

			}else{
				console.log("Bukan berada pada mode mobile, maka trigger tidak jalan!");

			}

			sesuaikan_nav_header();
		});
	}
	function sidebar_hide( sidebar ) {
		sidebar.hide();
		$( 'html' ).unbind('click');//Hilangkan event html yang terdaftar agar tidak konflik
		sesuaikan_nav_header();
		
	}
	function responsive_content_toggle( sidebar ) {			
		// Responsive content berfungsi untuk menadi toggle ketika diklik sidebar akan muncul, jika sidear sudah muncul maka toggle ini akan hilang
		var responsive_content_toggle = $('.responsive_content');
		if ( sidebar.is(':visible') ) {
			//Ketika sidebar muncul, maka toggle hilang
			responsive_content_toggle.hide();
		}else{
			//Ketika sidebar hilang, maka toggle muncul
			//Tidak menggunakan hide, karena display yang digunakan adalah flex untuk munculnya
			responsive_content_toggle.css('display', 'flex');
		}


	}