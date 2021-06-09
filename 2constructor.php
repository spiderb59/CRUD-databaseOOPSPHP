<?php 
//creating a constructor using double underscore
class  AC
	{
		public $model;
		public $speed;

		function speedUp()
		{
			echo $this->speed+1;

		}
		function speedDown()
		{
			echo $this->speed-1;

		}
		function __construct()
		{
			echo $this->model = "voltas";

		}

	}

	$AC_one = new AC();

	

?>