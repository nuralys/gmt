<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coral</title>
	<meta content="telephone=no" name="format-detection">
	<meta name="robots" content="noodp, noydir">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="HandheldFriendly" content="true">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/slide.css">
	<link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script src="/js/app.js" type="text/javascript"></script>

</head>

<body>
	<div class="page">
		<?=$this->element('header')?>
		<div class="cr">
		<div class="content">
			<?php echo $this->fetch('content'); ?>
			
		</div>
		</div>
		
		<footer>
			<div class="cr">
				<div class="footer">
					<p class="copyright">
						©  2016 Coral Club Astana. Все права защищены.
					</p>
					<p class="developed">
						Cайт разработан в <a href="">AstanaCreative.kz</a>
					</p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>