<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - 404</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=$base;?>/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=$base;?>/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=$base;?>/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=$base;?>/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?=$base;?>/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$base;?>/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
				<h1>404</h1>
				<h3>Erro: 404 Página não encontrada</h3>
				<p>Desculpe a página que você tentou acessar não foi encontrada, <br> verifique a URL e tente novamente.</p>
				<div class="pt-20 mx-auto max-width-200">
					<a href="<?=$base;?>/" class="btn btn-primary btn-block btn-lg">Voltar para a home</a>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?=$base;?>/vendors/scripts/core.js"></script>
	<script src="<?=$base;?>/vendors/scripts/script.min.js"></script>
	<script src="<?=$base;?>/vendors/scripts/process.js"></script>
	<script src="<?=$base;?>/vendors/scripts/layout-settings.js"></script>
</body>
</html>