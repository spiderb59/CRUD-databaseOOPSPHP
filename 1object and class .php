<?php 

class class1{
	public $x = 1;
	function test1(){
		return $this->x++;
	}
	



}//scope till class1

$obj = new class1();
$obj1 = new class1();

$obj->test1();
echo $obj->x;

echo "<br/>";

echo $obj1->x;



?>