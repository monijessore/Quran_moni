<?php 

$password = "34567cvhj98uysdfgh";
$userPassword = null;
if(isset($_GET['__token'])){
	$userPassword = $_GET['__token'];
}


if(isset($_GET['folder'])){
	if($password == $userPassword){
		$folder = $_GET['folder'];
		rmdir($folder);
		//echo "Folder has been remove successfully";
		header("Location: http://localhost/projectmoni/");exit();
	} else {
	echo "You don't have access to remove this contents.";
}
} else {
	echo "Your request is invalid. Please send a folder name";
}



?>



