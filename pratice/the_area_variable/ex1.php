<?php 
	$a=1;
	$b=2;
	$b=&$a;
	$b=2;
	echo $a;
	function test() {
		global $a;
		echo $a;
	}
 ?>