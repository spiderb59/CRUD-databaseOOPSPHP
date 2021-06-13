<?php 
//abstract class contain atleast one abstract funstion 
//abstract funtion:- a funtion which we decalre but not implement and there must no be body
//object can be created of abstract class
//chlid class of abstract class must contain abstract function that is in parent class


abstract class  bank{
	abstract function citizenship();
}
class prabhu extends bank{
	function citizenship(){
		echo"Function called";
	}		
} 
class nic extends bank{
	function citizenship(){
		echo"Function called";
	}

}

?>

