<?php

class homeController extends Controller//class homeController akan inherit class Controller pada folder core
{
	public function index($id='',$name='')//memanggil method view pada class Controller
	{
		//echo 'I am in in '. __CLASS__ . ' method ' . __METHOD__;
		//echo 'Id is :'.$id.' and name is :'.$name;
		$this->view('home\index',[
			'name' =>$name,//element aray yang indexnya 'name' memiliki value $name, nilai $name disini adalah value element pertama dari array 
			'id'=>$id,
		]);
		//var_dump($this);
		$this->view->render();
	}
	
	public function aboutUs()
	{
		$this->view('home\aboutUs',[
			'name' =>$name,//element aray yang indexnya 'name' memiliki value $name, nilai $name disini adalah value element pertama dari array 
			'id'=>$id,
		]);
		//var_dump($this);
		$this->view->render();
	}
}