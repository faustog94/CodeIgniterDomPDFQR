<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>QR!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<h1>Generador QR de la salada</h1>
	
	<div align="center">
	<form action="<?=BASEURL . 'generar/qr'?>" method="post">
	<span>Metele un texto para generar el QR</span><br><br>
	<input type="text" name="qr_text" required="required" placeholder="">
	<input type="hidden" name="action" value="generate_qrcode"><input type="submit" name="" value="Generar QR">
	</form>

</div>
	
	
</body>
</html>
