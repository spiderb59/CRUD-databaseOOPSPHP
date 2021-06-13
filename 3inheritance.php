<?php 
class class1{
	public $num;
	function __construct(){
		$this->num= 5;
		echo "Construct1";
	}
	function fun1(){
		echo "fun1";
	}
}
class class2 extends class1{//inheritang the property of class 1 using extneds
	function __construct(){
		$this->num= 8;
		parent::__construct();

		echo "Construct2";
	}
	function fun1(){
		echo "fun2";
	}

}
$obj = new class2();
//$obj->fun1();
echo $obj->num;

?>