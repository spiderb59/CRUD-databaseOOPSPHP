<?php 
 class database{
 	private $host;
 	private $dbusername;
	private $dbpassword;
 	private $dbname;

 	protected function connect(){
 		$this->host='localhost';
 		$this->dbusername='root';
 		$this->dbpassword='';
 		$this->dbname='crud';

 		$con = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
 		return $con;

 	}


 }
 class query extends database{
 	public function getData($table,$field='*',$conditionArr='',$order_by_field='', $order_by_type='',$limit=''){
 		$sql = "select $field from $table";

 		if ($conditionArr!='') {
 			$c = count($conditionArr);
 			$i=1;
 			$sql.=' where';
 			foreach ($conditionArr as $key => $value) {
 				if ($i == $c) {
 					$sql.= " $key = '$value'";
 				}
 				else{
 					$sql.= " $key = '$value' and ";
 				}
 				$i++;
 				
 			}
 		}

 		if ($order_by_field!='') {
			$sql.= " order by $order_by_field $order_by_type";
		}
		if ($limit!='') {
			$sql.=" limit $limit";
		}
 		$result = $this->connect()->query($sql);
 		if ($result->num_rows>0) {
 			$arr = array();
 			while($row = $result->fetch_assoc()){
 				$arr[]= $row;
 			}
 			return $arr;
 		}else{
 			return 0;
 		}
 		/* select $field from $table where $condition like  $like order by $order_by_field, $order_by_type limit $limit*/	
 	}




 	public function insertData($table,$conditionArr){
 		if ($conditionArr!='') {
 			foreach ($conditionArr as $key => $value) {
 				$fieldArr[]=$key;
 				$valueArr[]=$value;
 				
 			}
 			$field = implode(",", $fieldArr) ;
 			$value = implode("', '",$valueArr);
 			$value="'".$value."'";
 			 $sql = "Insert into $table ($field) values ($value)";


 			$result = $this->connect()->query($sql);
 		}
 		
 	}




 	public function deleteData($table,$conditionArr){
 		if ($conditionArr!='') {
 			$sql = "delete from $table where ";
 			$c = count($conditionArr);
 			$i=1;
 			foreach ($conditionArr as $key => $value) {
 				if ($i == $c) {
 					$sql.= " $key = '$value'";
 				}
 				else{
 					$sql.= " $key = '$value' and ";
 				}
 				$i++;
 				
 			$result = $this->connect()->query($sql);
 		}
 	}
 }

 public function updateData($table,$conditionArr,$where_field,$where_value){
 		if ($conditionArr!='') {
 			$sql = "update  $table set ";
 			$c = count($conditionArr);
 			$i=1;
 			foreach ($conditionArr as $key=>$value) {
 				if ($i==$c) {
 					$sql.= "$key = '$value'";
 				}
 				else{
 					$sql.= "$key ='$value' ,";

 				}
 				$i++;
 			}
 			
 				$sql.=" where $where_field ='$where_value'" ;
 			$result = $this->connect()->query($sql);
 	}
 }



}

?>