<?php

class Controller
{
	protected $view;
	public function view($viewName,$data=[])//$viewName location view, $data parameter yang ingin dipasssing
	{
		$this->view = new View($viewName,$data);//variabel $view menjadi an instance dari Class View
		return $this->view;
	}
}