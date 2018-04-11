<?php

use Model\Posts;
class Controller_Shoppingcart extends Controller_Template{
	
	public function action_shoppingCart($id){
		$demo = Posts::find($id);
		$data = array();
		if (Input::post('Order')){
			$to = Input::post('emailAdd');
			$subject = "Brochure Order";
			$txt = "You have ". Input::post('Quantity')." "."'".$demo->title."'"." brochures coming to"." ".Input::post('Address');
			$admintext = Input::post('Quantity')." "."'".$demo->title."'"." brochures ordered to"." ".Input::post('Address');
			
		mail($to,$subject,$txt);
		mail('Aaron.Pereira@colostate.edu',$subject,$admintext);
		mail('ct310@cs.colostate.edu',$subject,$admintext);
		Response::redirect();
		
		}
		$view = View::forge('posts/shoppingCart', $data);
		$view->set_safe('demo',$demo);
		$this->template->title = 'Shopping Cart';
		$this->template->content = $view;
	
	}

}