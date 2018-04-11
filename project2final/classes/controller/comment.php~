<?php

use Model\Comment;


class Controller_Comment extends Controller_Template{
	
	public function action_addComment(){
    if (Input::post('send')){
        $post = new Comment();
        $post->text = filter_var(Input::post('comment'), FILTER_SANITIZE_STRING);
        $post->att_id = Input::post('Pageid');
        $post->save();
        
    }
    Response::redirect('/');
  
    
}


	
   

public function action_deleteComment($id){
    $posts = Comment::find($id);
    $posts->delete();
    

    Response::redirect('/');
}

public function action_editComment($id){
    if (Input::post('Save')){
        $post = Comment::find($id); 
        $post->text = Input::post("newComment");
        $post->save();
        Response::redirect('/');
    }
    $this->template->title = 'Edit Comment';
	$this->template->content = View::forge('posts/editComment');
   
}


}