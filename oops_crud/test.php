<?php 
include('database.php');

$obj = new query(); //creating new object for query. 

//select query to fecth data. 
$conditionArr = array('name'=>'Shital','id'=>'1');
$result=$obj->getData('user','*',$conditionArr,'id','asc','7');
$result = $obj->getData('user');


//insert query to add data
$conditionArr = array('name'=>'test','email'=>'test@gmail.com','mobile'=>'123456');
$result = $obj->insertData('user',$conditionArr);
echo '<pre>';
print_r($result);


//delete query by grabbing id
$conditionArr = array('id'=>'2');
$result = $obj->deleteData('user',$conditionArr);


//update query grabbing id
$conditionArr = array('email'=>'hey@shitalmainali.com.np','name'=>'Shital Mainali','mobile'=>'9863995023');
$result = $obj->updateData('user',$conditionArr,'id',1);


?>
