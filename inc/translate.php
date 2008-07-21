<?
function string_translate($StringToTranslate , $lang) 
{ 
     if(file_exists('./inc/lang/' . $lang .'.php')) 
     {  
          $langdatei = fopen('./inc/lang/' . $lang . '.php','r'); 
           while (!feof($langdatei)) 
          {  	
               $buffer = explode(" : ", fgets($langdatei));

               if($buffer[0] == $StringToTranslate) 
               { 
                    return $buffer[1]; 
               }      
          } 
     } 
     return $StringToTranslate; 
}

?>