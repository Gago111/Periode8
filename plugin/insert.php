<?php
require_once "config.php";

    if(!isset($_SESSION))
    {
        session_start();
    }

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM user_data WHERE userID=" .  $_SESSION['id'];
$result = $link->query($sql);

if (isset($_POST['save-user'])) {
	echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";

	$profileImageName = time() . '_' . $_FILES['profileImage']['name'];
  $currentdirectory = getcwd();
	$target = $currentdirectory . '/wp-content/plugins/SSF-plugin/images/' . $profileImageName;

	if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target)) {
		if (mysqli_query($link,$sql)) {
			$msg = "image uploaded";
			$css_class = "alert alert-success";
		}else {
			$msg = "Database Error: Failed to save user";
			$css_class = "alert alert-danger";
		}
	} else {
		$msg = "Failed to upload image";
		$css_class = "alert alert-danger";
	}

		$voornaam = mysqli_real_escape_string($link, $_REQUEST['voornaam']);
		$tussenvoegsel = mysqli_real_escape_string($link, $_REQUEST['tussenvoegsel']);
		$achternaam = mysqli_real_escape_string($link, $_REQUEST['achternaam']);
		$stemsoort = mysqli_real_escape_string($link, $_REQUEST['stemsoort']);
		$adres = mysqli_real_escape_string($link, $_REQUEST['adres']);
		$postcode = mysqli_real_escape_string($link, $_REQUEST['postcode']);
		$plaats = mysqli_real_escape_string($link, $_REQUEST['plaats']);
		$telefoon = mysqli_real_escape_string($link, $_REQUEST['telefoon']);
		$mobiel = mysqli_real_escape_string($link, $_REQUEST['mobiel']);
		$email = mysqli_real_escape_string($link, $_REQUEST['email']);
		$status = mysqli_real_escape_string($link, $_REQUEST['status']);
		$lid_sinds = mysqli_real_escape_string($link, $_REQUEST['lid_sinds']);
		$lid_tot = mysqli_real_escape_string($link, $_REQUEST['lid_tot']);
		$userID = $_SESSION['id'];

		$sql = "INSERT INTO user_data (voornaam,tussenvoegsel,achternaam,stemsoort,adres,postcode,plaats,telefoon,mobiel,email,status,lid_sinds,lid_tot,foto,userID)  VALUES ('$voornaam','$tussenvoegsel','$achternaam','$stemsoort','$adres','$postcode','$plaats','$telefoon','$mobiel','$email','$status','$lid_sinds','$lid_tot','$profileImageName', '$userID')";

		if(mysqli_query($link, $sql)){
      $yourURL = get_the_permalink(171);
      echo ("<script>location.href='$yourURL'</script>");
      die;
		}
		else {
		  echo "ERROR: Could not execute $sql. " . mysqli_error($link);
		}
}

?>
