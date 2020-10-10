<?php 

ini_set('max_execution_time', '500');

$success = 0;
if(isset($_POST['surah']) && isset($_POST['prefix']) && isset($_POST['start']) && isset($_POST['end'])){
	if(!empty($_POST['surah']) && !empty($_POST['prefix']) && !empty($_POST['start']) && !empty($_POST['end'])){
		$prefix=$_POST['prefix'];
		$a=$_POST['start'];
		$surah = $_POST['surah'];

		if(file_exists($surah) == false){
			mkdir($surah);
		}


		while ( $a <= $_POST['end']) {
			$verse = 'https://verses.quran.com/Alafasy/mp3/'.$prefix.$a.'.mp3';
			$audio = file_get_contents($verse);
			file_put_contents($surah.'/'.$prefix.$a.'.mp3', $audio);
			$a++;
		}
		$success = 1;
	}
}




?>



<!DOCTYPE html>
<html>
<head>
	<title>Script</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<br><br>
<div class="col-md-4 offset-md-4">
	<?php if($success == 1){ ?>
	<p class="alert alert-success">Surah has been downloaded successfully.</p>
	<?php }	?>
	<form method="post">
	  
	  <div class="form-group">
	    <label >Surah Name</label>
	    <input type="text" name="surah" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label >Prefix</label>
	    <input type="text" name="prefix" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label >Start From</label>
	    <input type="text" name="start" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label >End To</label>
	    <input type="text" name="end" class="form-control" >
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>


</body>
</html>