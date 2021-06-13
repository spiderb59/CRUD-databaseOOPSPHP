<?php 

	class class1{
		private $num;
		function __construct(){
			//$this->num=4;
		}

		  protected function getData(){
			echo "Hello1";
		}
	}
	class class2 extends class1{
		  function getData(){
			echo "hello2";;
		}
	}

	$obj = new class2();
	echo $obj->getData();
	//echo $obj->num;

//public can be used anywhere
//protected can be used within a class or  in inheritated class
//private can be used only inside a class
?>