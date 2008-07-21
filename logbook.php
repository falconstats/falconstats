
<?

/* Select logbook and language to be displayed */
$user_name=$_GET['id'];
$lang1=$_GET['lang'];

/* For security reasons only */
$user_name=strip_tags($user_name);
$user_name=stripslashes($user_name);
$lang1=strip_tags($lang1);
$lang1=stripslashes($lang1);

require_once('./inc/translate.php');
require_once('./inc/config.php');	// configuration file

/* Checks if desired language is set */
if($lang1!='') {
	$lang=$lang1;	
}

/* If language is not English, load Language File */

//	include_once('./inc/lang/'.$lang.'.php');	// language file

/* Initialize $logbook */
$logbook=array();


include('./inc/licence.php');

/* check if the logbook is on the server */ 
$bol=file_exists('logbooks/'.$user_name.'.lbk.txt');
	if($bol) 
		{ 
/* Open file if it is there */
		$datei=fopen('logbooks/'. $user_name .'.lbk.txt', 'r');
		if($datei)	
		{ 
/* read all lines from logbook, diverted into two parts into array*/
			while (!feof($datei)) 
			{
				$temp=fgets($datei);
				$temp_array=explode(': ', "$temp");
/* Translate String into desired language */
				$temp_array[0]=string_translate($temp_array[0],$lang);
				array_push($logbook,$temp_array[0]);													
				array_push($logbook,$temp_array[1]);
			} 
			fclose($datei);
		}
	}
	else {
		print($lang_lb_not_found);
	}
	
/* Include template file for HTML output */

include('inc/templates/'.$template.'.php')
?>
