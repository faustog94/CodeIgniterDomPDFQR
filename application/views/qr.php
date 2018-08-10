<!DOCTYPE html>

<head>

	<title>EL QR</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<style>
body {
    font-family: DejaVu Sans;
	
}
h1{
	font-size: 22px;
	padding-bottom: 20px;
}
.bd-example {

padding: 1.5rem;
margin-right: 0;
margin-left: 0;
border-width: .2rem;
}
</style>
</head>
<body>
	<?php if($img_url){ ?>
	<div class="bd-example" align="center">
	<div class="alert alert-success"> 
	
	<h1> Futuro QR de Asistencia </h1>
	<br>
	<br>
	<br>
	
	<img src="<?php echo $img_url; ?>" class="" />
	</div>
	</div> 
	<?php } ?>
</body>
</html>
