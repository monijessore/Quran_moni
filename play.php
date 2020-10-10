<?php 

if(isset($_GET['folder'])){
	
	$folder = $_GET['folder'];
	$audios = array_filter(glob($folder.'/*.mp3'));


} else {
	echo "Your request is invalid. Please send a folder name";exit();
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Surah</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<br><br>
<div class="container">
	<table class="table table-bordered">
		<?php foreach($audios as $audio){ ?>
			<tr>
				<td><audio src="http://localhost/projectmoni/<?php echo $audio; ?>" controls=""></audio></td>
			</tr>
		<?php } ?>
		
	</table>
</div>

</body>
</html>