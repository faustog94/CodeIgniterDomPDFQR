<!DOCTYPE html>
<head>
	<title>EL QR</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
		
	h1{
		font-size: 22px;
		padding-bottom: 20px;
	}
	</style>
</head>
<body>
<?php if(isset($img_url)){ ?>
	<div style="text-align: center;">
		<div class="alert alert-success"> 
			<h1> Futuro QR de Asistencia </h1>
			<br>
			<br>
			<br>
			
			<img src="<?=$img_url?>"/>
		</div>
	</div> 
<?php } ?>
</body>
</html>
