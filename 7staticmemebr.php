<?php
class class1{
	 static public $num = 10;


	static function fun1(){
		 self::$num++;
	}

} 
class1::fun1();
echo class1::$num;
class1::fun1();
echo class1::$num;
class1::fun1();
echo class1::$num;


?>