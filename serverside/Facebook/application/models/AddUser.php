<?php
/**
* 
*/
class AddUser extends CI_Model
{
	function insertUser($user){
		
			$this->db->insert('fb_members',$user);
			$result=array("Success"=>"Inserted successfully");
		//}
		// catch(){
		// 	$result=array("Error"=>"Insertion operation failed");}
		
		return $result;
	}

	
}



?>