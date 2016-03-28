<?php
/**
* 
*/
class Add_user extends CI_Model
{
	function insertUser($user){
		
			$this->db->insert('fb_members',$user);
			$result=array("Success"=>"Inserted successfully");
			return $result;
	}

	
}



?>