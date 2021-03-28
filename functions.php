<?php
	require_once 'config.php';

if (isset($_POST['funName'])) 
{
	if($_POST['funName']== 'load_classes')
	{
		$deg_id = $_POST['deg_id'];
		load_classes($deg_id);
	}
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