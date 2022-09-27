<?php
require_once ("../connect_db.php");
require_once ("../functions/make_arr_from_obj.php");
$id = $_POST['id'];
$sql = "SELECT * FROM reestrkp where id = '$id' ORDER BY pp";
$fQuery = $mysqli->query($sql);
$arr_name = makeArrayFromObj($fQuery) ;
echo json_encode($arr_name, JSON_UNESCAPED_UNICODE);
?>
