<?php 
$password = "34567cvhj98uysdfgh";
$dirs = array_filter(glob('*'), 'is_dir');
$userPassword = null;
if(isset($_GET['__token'])){
	$userPassword = $_GET['__token'];
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
		<tr>
			<th>Surah Name</th>
			<th>Verses</th>
			<?php if($password == $userPassword) { ?>
			<th>Actions</th>
			<?php }?>
		</tr>
		<?php foreach($dirs as $dir){ ?>
			<tr>
				<td><?php echo $dir; ?></td>
				<td><a href="play.php?folder=<?php echo $dir; ?>">Play</a></td>
				<?php if($password == $userPassword) { ?>
				<td><a href="remove.php?folder=<?php echo $dir; ?>">Delete</a></td>
				<?php }?>
			</tr>
		<?php } ?>
		
	</table>
</div>

</body>
</html>