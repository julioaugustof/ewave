<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';

		$tituloPagina = $nome.' - '.$sobrenome;
		$descricao = '';
		$Tags = 'Cerveja, teste, Ewave, Fast Solutions';
		$imagemChamada = $url.'imagens/bg.jpeg';
		$urlPagina = $url;
		$sessao = 'home';
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>

		<meta property="og:title" content="<? echo $tituloPagina ?>" />
		<meta name="description" content="<? echo $descricao ?>" />
		<meta property="og:description" content="<? echo $descricao ?>" />
		<meta name="service" content="<? echo $descricao ?>" />
		<meta name="keywords" content="<? echo $Tags ?>" />
		<meta itemprop="name" content="<? echo $tituloPagina ?>">
		<meta itemprop="image" content="<? echo $imagemChamada ?>" />
		<meta itemprop="description" content="<? echo $descricao ?>" />
		<meta property="og:url" content="<? echo $urlPagina ?>" />
		<meta property="og:image" content="<? echo $imagemChamada ?>" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="470" />
		<meta property="og:image:height" content="276" />		
		<meta property="og:type" content="website" />
		<meta name="twitter:title" content="<? echo $tituloPagina ?>">
		<meta name="twitter:description" content="<? echo $descricao ?>">
		<meta name="twitter:image" content="<? echo $imagemChamada ?>">
		<meta name="twitter:domain" content="<? echo $urlPagina ?>">
	</head>
	<body id="Favorita">
		<?php include 'assets/header.php'; ?>

		<section>
			<div>
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod qui laudantium atque quia doloremque, voluptatem perspiciatis distinctio quis nam id magnam accusamus dolore quaerat repellendus, necessitatibus quibusdam. Nemo deserunt, ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod qui laudantium atque quia doloremque, voluptatem perspiciatis distinctio quis nam id magnam accusamus dolore quaerat repellendus, necessitatibus quibusdam. Nemo deserunt, ipsa.
					</p>
				</article>
				<article class="box">
					<form>
						<label>
							Você prefere
							<select name="amarga">
								<option value="MuitoAmarga" selected="selected">Muito amarga</option>
								<option value="Amarga">Amarga</option>
								<option value="Mediano">Médio</option>
								<option value="MoucoAmarga">Pouco Amarga</option>
								<option value="Suave">Suave</option>
							</select>
						</label>
						<label>
							Com
							<select name="malte">
								<option value="MuitoMalte" selected="selected">Muito malte</option>
								<option value="PoucoMalte">Pouco malte</option>
								<option value="Mediano">Mediano</option>
								<option value="MoucoMalte">Pouco malte</option>
							</select>
						</label>
						<label>
							De preferência
							<select name="malte">
								<option value="Brasil" selected="selected">Nacional</option>
								<option value="Alema">Alemã</option>
								<option value="Francesa">Francesa</option>
								<option value="Espanhola">Espanhola</option>
							</select>
						</label>
						<label>
							Você é o (a)
							<input type="text" name="nome" placeholder="Nome" value="">
							<input type="text" name="e-mail" placeholder="E-mail" value="">
						</label>
						<input type="submit" value="Conhecer o novo sabor!" id="Enviar" onclick="submitform()">
					</form>
				</article>
				<br />
			</div>
		</section>
		
		<?php include 'assets/footer.php'; ?>
		<script type="text/javascript">

			function submitform() {
				$('form').submit(function(event) {
					alert('Enviado!');
					console.log($(this).serializeArray());
					event.preventDefault();
				});
			}
		</script>
	</body>
</html>