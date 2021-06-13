<?php 
//same operation may behave differently in different class
//interface and astract class can be used to implement polymership

//abstract class

abstract class class1{
	abstract function fun1();
}
class class2 extends class1{
	function fun1(){
		echo "fun1";
	}
}
class class3 extends class1{
	function fun1(){
		echo "fun2";
	}

}
$obj = new class3();
$obj->fun1();


?>