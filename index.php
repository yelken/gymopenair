<!DOCTYPE HTML>
<html>
	<head>
		<title>Academias da cidade</title>
		<!-- meta -->
		<meta charset="UTF-8" />
		<meta name="author" content="Vitoria Vasconcelos" />
		<meta name="author" content="André Rodrigues Gomes Costa" />
		<meta name="author" content="Paulo de Souza Barreto Valdevino Calumbi" />
		<meta name="author" content="Yelken Hackman" />
		<meta name="author" content="Paolo Diego de Souza" />
		<meta name="description" content="Academias da cidade"/>
		

	  <meta name="viewport"
	  content="width=device-width,
	  minimum-scale=1.0, maximum-scale=1.0" />
	  
		<!-- links -->
		<link rel="author" href="#"/><!-- autores -->
		<link href='favicon.ico' rel='shortcut icon'/>
		<link href='assets/icon-60.png' rel='icon'/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" /><!-- css -->
		<link rel="favicon" href="favicon.ico" />
		<!-- javascript -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/script.js">//Scripts Próprios</script>
	</head>
	<body>
		<header id="headPrincipal" class="cabecalho_pagina">
			<div class="logo">C</div>
			<div class="titulo">
				<h1>Academias da cidade</h1>
				<h2>Encontre a academia mais próxima de você</h2>
			</div>
		</header>
		<div id="mapa" class="mapa_principal">
		</div>
		<div id="wrap" class="wrap">
			<div id="busca" class="area_busca">
				<div id="buscarHosital" class="form_busca">
					<div>
						<input type="text" id="txtBuscaHospital" class="busca" autocomplete="on" placeholder="Ex. Rua das Palmeiras, 83"/>
					</div>
					<button id="btnSubmit" class="procurar">Buscar <span class="icone">a</span></button>
				</div>
			</div>
			<section id="resultados" class="area_resultados">
			</section>
		</div>
	</body>
</html>