<?php
/**
 * Demo for CT310
 */
class Controller_Login extends Controller
{
	/**
	 * Shows a list of all demo items
	 */
	
	public function action_loginForm()
	{
		$status = 'success';

		$content = View::forge('login/login');

		$content -> set_safe('status',$status);

		return $content;
	}



	public function action_printUserDetails()
	{
		$session = Session::instance(); 
		
		$username = $session->get('username');

		$id = $session->get('userid');
		
		if(isset($username) && isset($id))
		{

			$content = View::forge('login/print');
		
			$content->set_safe('username',$username);
	
			$content->set_safe('id',$id);
		
			return $content;
		
		}
		else
		{
			$content = View::forge('login/notLoggedIn');
		
			return $content;
		}
		
	}

	public function action_logout()
	{
		$session = Session::instance(); 

		$session->destroy();

		$content = View::forge('login/logout');

		return $content;
	}

}
