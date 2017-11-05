<html>
<head>	
<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#img").click(function(){
			$("#menu").toggle();
		});
	});
</script>
</head>
<meta charset="UTF-8">
<body>
<div>	
	<img src="meuProjetinho/imagens/nave2.png" id="img">
</div>
<div id="menu">
	<ul>
		<li><a href="#" id="fav">Favoritos</a></li>
		<li><a href="#">Sign out</a></li>	
	</ul>	
</div>	
</body>
</html>