<?php

class CommentsController extends Controller{

	public $commentObject;

   	public function post($commentID){
        $this->commentObject = new Comment();
		$comment = $this->commentObject->getComment($commentID);
	  	$this->set('comment',$comment);
   	}

	public function index(){
		$this->commentObject = new Comment();
		$comments = $this->commentObject->getAllComments();
		$this->set('title', 'Comments');
		$this->set('comments',$comments);
	}

}

?>
