<?php 
	header('content_type:text/html;charset=utf-8');
	/***设置时区**/
	echo date('y-m-d h:i:s'),"<br/>";
	echo date('D',mktime(0,0,0,7,2,1996));

 ?>