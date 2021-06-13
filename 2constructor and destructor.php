<?php 

class class1{
	function __construct($y){
		$this->x=$y;
	}
	function fun1(){
		echo $this->x;
	}
	function __destruct(){
		//echo "stop";
	}
	
}//scope till class1

$obj = new class1(5);
$obj->fun1();
?>