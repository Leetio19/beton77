<?php  
	$header = "Content-type: text/html; charset=utf-8";
	$subject = "������ � ����� �������� ����� Beton77";
 
	$msg 	= "������ � �����: \n\n";
	foreach ($_POST as $key=>$val)
	{
		$msg .= "$key :  $val \n";
	}
 
	$from = "leetio19@gmail.com"; // ����
	mail($from,$subject,$msg,$header);
	header("Location: $_SERVER[HTTP_REFERER]");
 
?>