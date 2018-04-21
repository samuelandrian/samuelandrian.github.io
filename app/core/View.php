<?php


class View
{
	protected $view_file;//define where the view file is

	protected $view_data;//data yang ingin di pass
	public function __construct($view_file, $view_data)
	{
		$this->view_file = $view_file;
		$this->view_data = $view_data;
	}

	public function render()
	{
		if(file_exists(VIEW.$this->view_file.'.phtml'))
		{
			//echo 'tai anjing';//testing lewat apa engga
			include VIEW.$this->view_file.'.phtml';
		}

	}
}