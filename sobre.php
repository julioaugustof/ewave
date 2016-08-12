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
		$sessao = 'about';
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
	<body id="PaginaAbout">
		<?php include 'assets/header.php'; ?>
		<section>
			<div>
				<p>Página em Construção...</p>
			</div>
		</section>
		<?php include 'assets/footer.php'; ?>
	</body>
</html>