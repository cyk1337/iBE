<?php

class IndexAction extends Action {
   
	public function index(){	
		header("Content-Type:text/html; charset=utf-8");
		
		// //实例化模型
		// $news=M('article');	

		// $news_list=$news->field(array('id','subject','message','createtime'))->order('id desc')->select();
		
		
		// foreach($news_list as $key=>$value){		
		// 		$news_list[$key]['createtime']=date("Y-m-d H:i:s",$value['createtime']);
		// }
		// $this->assign('title','书书约起来');
		// $this->assign('news_list',$news_list);
		// $this->display();

			//实例化模型
		$books=M('bookinfo');	

		$book_list=$books->field(array('book_id','book_name','book_author','owner_id','book_owner_message','insert_time'))->order('book_id desc')->select();
		
		
		foreach($book_list as $key=>$value){		
				$book_list[$key]['insert_time']=date("Y-m-d H:i:s",$value['insert_time']);
		}
		$this->assign('title','书书约起来');
		$this->assign('book_list',$book_list);
		$this->display();
	}
}