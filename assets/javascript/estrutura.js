jQuery(document).ready(function() {

	// Menu versão Mobile

		function AbrirMenu() {
			$('#Menu').addClass('aberto');
			$('#AreaDoMenu').addClass('aberto');
		}

		function FecharMenu() {
			$('.aberto').removeClass('aberto');
		}

		$('#Menu').click(function() {
			if($('#Menu').hasClass('aberto')) {
				FecharMenu();
			}
			else {
				AbrirMenu();
			}
		});

	// Trocando BGs
		function changeBg() {
			if($('body').hasClass('bg1')) {
				$('body').removeClass('bg1');
				$('body').addClass('bg2');
			} else if($('body').hasClass('bg2')) {
				$('body').removeClass('bg2');
				$('body').addClass('bg3');
			} else if($('body').hasClass('bg3')) {
				$('body').removeClass('bg3');
				$('body').addClass('bg4');
			} else {
				$('body').removeClass('bg4');
				$('body').addClass('bg1');
			}
		}

	// Loading
		function showContent() {
			$('body').fadeIn('slow');

			// Identificando a Home
				if($('#PaginaInicial').length >= 1) {

					// Trocando BGs
						setInterval(function() {
							changeBg();
						}, 3000);
				}
		}

		var loader = new Loader('body', {
			userCallback:showContent,
			showProgress:true,
			showProgressText:true
		});

		loader.Start();
});