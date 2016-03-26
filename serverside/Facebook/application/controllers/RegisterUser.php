<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterUser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function insertUser()
	{
		if(isset($_REQUEST['fname'])&& isset($_REQUEST['lname'])&&isset($_REQUEST['password'])&&isset($_REQUEST['email'])&&isset($_REQUEST['day'])&&isset($_REQUEST['month'])&&isset($_REQUEST['year'])&&isset($_REQUEST['gender']))
		{
			if(!empty($_REQUEST['fname'])&& !empty($_REQUEST['lname'])&&!empty($_REQUEST['password'])&&!empty($_REQUEST['email'])&&!empty($_REQUEST['day'])&&!empty($_REQUEST['month'])&&!empty($_REQUEST['year'])&&!empty($_REQUEST['gender']))
			{
				// $user['vchr_first_name']=$this->input->get_post('fname');
    //         	$user['vchr_last_name']=$this->input->get_post('lname');
    //        		$user['vchr_password']=$this->input->get_post('password');
    //         	$user['vchr_email']=$this->input->get_post('email');
    //         	$user['int_day']=$this->input->get_post('day');
    //         	$user['vchr_month']=$this->input->get_post('month');
    //         	$user['int_year']=$this->input->get_post('year');
    //         	$user['vchr_gender']=$this->input->get_post('gender');
				$fname=$this->input->get_post('fname');
             	$lname=$this->input->get_post('lname');
    			$password=$this->input->get_post('password');
    			$email=$this->input->get_post('email');
    			$day=$this->input->get_post('day');
    			$month=$this->input->get_post('month');
    			$year=$this->input->get_post('year');
    			$gender=$this->input->get_post('gender');
            	$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
            	$pwdLength=strlen($password);
            	if(preg_match('/^[0-9]+$/',$fname))
            	{
             		$result=array("Error"=>"Invalid input format for first name");
                }
                else if(preg_match('/^[0-9]+$/',$lname))
            	{
             		$result=array("Error"=>"Invalid input format for last name");
                }
                else if($pwdLength<6 || $pwdLength>12)
            	{
             		$result=array("Error"=>"Password must be minimum 6 characters and maximum 12");
                }
                else if(!(preg_match($pattern,$email)))
                {
                	$result=array("Error"=>"Invalid email format");
                }
                else
                {
                	// $this->load->model('RegisterUser');
                	// $result=$this->RegisterUser->insertUser($user);
                	$result=array('Success'=>'done');

                }
			}
			else
			{
				$result=array('Error'=>'it seems mandatory fields not set');
			}
		}
		
		else
		{
			$result=array('Error'=>'No data recieved');
		}
		echo json_encode($result);
       
	}


	


}
