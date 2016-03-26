<?php
/**
* 
*/
class AddUser extends CI_Model
{
	function insertUser($user){
		$this->db->insert('fb_members',$user);
		if($this->db->affected_rows()>0){
			$result=array("Success"=>"Inserted successfully");
		}
		else
			$result=array("Error"=>"Insertion operation failed");
		return $result;
	}

	
}



?>