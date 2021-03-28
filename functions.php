<?php
	require_once 'config.php';

if (isset($_POST['funName'])) 
{
	if($_POST['funName']== 'load_classes')
	{
		$deg_id = $_POST['deg_id'];
		load_classes($deg_id);
	}
	else if($_POST['funName']== 'Save')
	{

		save();
	}
}

	function save()
	{
		$pdo = connect();

		$data =array(
			'name' => $_POST['name'],
			'fname' => $_POST['fname'],
			'cnic' => $_POST['cnic'],
			'fcnic' => $_POST['fcnic'],
			'dob' => $_POST['dob'],
			'mobNo' => $_POST['mobNo'],
			'deg_id' => $_POST['deg_id'],
			'class_id' => $_POST['class_id'],
			'address' => $_POST['address'],
			'status' => $_POST['status'],
			'schlorship' => $_POST['scholorship'],
		);
		$sql = "INSERT INTO student (`name`, `fname`, `cnic`, `fcnic`, `dob`, `mobNo`, `deg_id`, `class_id`, `address`, `status`, `schlorship`) VALUES (:name,:fname,:cnic,:fcnic,:dob,:mobNo,:deg_id,:class_id,:address,:status,:schlorship)";
		$pdo->prepare($sql)->execute($data);		
	}

	function load_degrees()
	{
		$pdo = connect();
		// geting Degrees
		$data =  $pdo->query("SELECT * FROM degree");
		$rows = $data->fetchAll(PDO::FETCH_ASSOC);
		// $degree = array();
		// foreach($rows as $val) {
		//     $degree[$val['id']] = $val['name'];
		// }
		return $rows;
	}
	function load_classes($deg_id=0)
	{
		$pdo = connect();
		// geting Classes
		$data =  $pdo->query("SELECT * FROM class WHERE class.deg_id=$deg_id");
		$rows = $data->fetchAll(PDO::FETCH_ASSOC);
		$classes = array();
			echo "<option>SELECT CLASS</option>";
		foreach($rows as $val) {
		    echo "<option value='".$val['id']."'>".$val['name']."</option>";
		}
	}

?>