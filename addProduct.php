<?php
include('functions.php');

if( isset( $_POST['submit'] ) )
{
	$imgSrc = 'images/image.jpg';
	include('settings.php');

	// 2. ايجاد کوئري
	$sql = "INSERT INTO Product (name, price, weekday, timeFrom, timeTo, imgSrc, description) 
	VALUES('{$_POST['name']}', {$_POST['price']},
	'{$_POST['weekday']}', '{$_POST['timeFrom']}', '{$_POST['timeTo']}', '{$imgSrc}', '{$_POST['description']}')";
	//$fa = ("SET CHARACTER SET utf8");
	//$res = $dbc -> query($fa);
	
	$db = new DB();
	$db -> execute($sql);
	unset($db);
	
	$alert = alertTemplate('با موفقیت ثبت شد!', 'danger');
}
?>
<!doctype html>
<html lang = "fa">
	<head>
		<title>نتیجه</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<link href = "style.css" rel = "stylesheet">
		<style>
		</style>
	</head>
	<body class = "container">
		<header></header>
		<main>
			<?php
				if( isset($alert) )
					echo $alert;
			?>
		</main>
		<aside></aside>
		<footer></footer>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>