<?php
	include_once '../_config/bdd.php';
	$statusData = $bdd->query('select * from status');
	
	//select status
	function selectStatus(){
		global $statusData;
		$select_status = "<select name='status' class='text-black'>";
		$select_status .="<option value='0'>Status</option>";
		foreach ($statusData as $data){
			$StatusName = $data['status_name'];
			$statusId = $data['status_id'];
			$select_status .="<option value='$statusId'>$StatusName</option>";
		}
		$select_status .="</select>";
		return $select_status;
	}
	