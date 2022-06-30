<?php  
	$header = "Content-type: text/html; charset=utf-8";
	$subject = "Заявка с формы обратной связи Beton77";
 
	$msg 	= "Данные с формы: \n\n";
	foreach ($_POST as $key=>$val)
	{
		$msg .= "$key :  $val \n";
	}
 
	$from = "leetio19@gmail.com"; // Кому
	mail($from,$subject,$msg,$header);
	header("Location: $_SERVER[HTTP_REFERER]");
 
?>