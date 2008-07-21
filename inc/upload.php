<?php
$checksum="797f7d2bc52d97daed8032e1d84a3d858c81369e";
$hash=$_POST['hash'];
$user_name=$_POST['user_name'];
$user_pw=$_POST['user_pw'];
$tmp_logbook=$_POST['logbook'];

//Datum+Uhrzeit ermitteln
$datum=date("d");
$datum.=".";
$datum.=date("m");
$datum.=".";
$datum.=date("Y");
$datum.=" - ";
$datum.=date("G");
$datum.=":";
$datum.=date("i");
$datum.=":";
$datum.=date("s");

/* Check if Data is send by programm */
if($hash==$checksum) 
{

	// authenticate with user-database 
	require_once('./password.php');
	$login_correct=user_check($user_name,$user_pw); // replys if user is authenticated or not (boolean)
	if($login_correct=="1") {
		$datei=fopen('../logbooks/'. $user_name .'.lbk.txt', 'w+'); // carefull, overwrites data without asking!
		fwrite($datei, $tmp_logbook);
		fwrite($datei, $datum);
		if($datei)	
		{
			echo("Logindata correct - Logbook updated");
		}
		fclose($datei);
	}
} else { echo("You are not authorized"); }



?>