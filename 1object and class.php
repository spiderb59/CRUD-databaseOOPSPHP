<!-- opps concept in php (Object and Class) -->

<?php 

	//Structure, variable , features
	//behaviour, method
	class  AC
	{
		public $model = "xyz";
		public $speed = 16;

		function speedUp()
		{
			echo $this->speed+1;

		}
		function speedDown()
		{
			echo $this->speed-1;

		}

	}
//creating object
	echo"AC one object";
	$AC_one = new AC;
    $AC_one->speedUp();
    echo $AC_one->model = "shital";

//creating second aoject
	echo"AC two object";
    $AC_two = new AC;
    echo $AC_two->model;
    $AC_two->speedDown();

?>