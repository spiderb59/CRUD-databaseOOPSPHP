<?php 
trait class1{
	function fun1(){
		echo "function1";
	}
}
class class2 {
use class1;
	function fun2(){
		echo "function2";
	}
}
class class3 extends class2{
	function fun3(){
		echo "function3";
	}

}
class class4 extends class3{
	
	function fun4(){
		echo "function4";
	}

}

$obj = new class3();
$obj->fun1();



?>