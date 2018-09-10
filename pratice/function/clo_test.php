<?php 
    header('content_type:text/html;charset=utf-8');
/******test1******/
	function test($name,Closure $clo){
		echo "hello,{$name}\n";
		$clo();
	}
	$name1='lxy';
	test("lili",function(){
		global $name1;
		echo "nihao,{$name1}\n";
	})
	function test1(){
		echo "this is test1\n";
	}

	function test2(){
		echo "this is test2\n";
	}	
	function dowhat($func){
		$func();
	}
	dowhat('test1');
	// $name1="lxy2";
	// $func=function($name){
	// 	echo "test2 nihao1{$name}\n";
	// } 
	// $func('test2');
?>