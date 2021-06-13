<?php
//interface can only contain abstract funtion not normal function
//interface supports multiple inheritace
//in interface we can not define variables
//no constructor in interface 
//all function must be public
//we can not create object of interface

interface class1{
	public function test();


} 
interface class2{
	public function test2();


}

class class3 implements class1,class2{//inheritang interfaces
  public function test(){
  		echo "test";
   }
   public function test2(){

   }
}

$obj = new class3();
echo $obj->test();

?>