<?
function user_check($user_name,$user_pw) 
{
	$userdata = fopen('../inc/userdata.php','r'); 
      while (!feof($userdata)) 
      {  	
           $buffer = explode(":", fgets($userdata));
           if($buffer[0]==$user_name) 
           {
                if($buffer[1]==$user_pw)
				{	
					$loggin_correct=1;
				}
           }      
      } 
	return $loggin_correct;
}

?>