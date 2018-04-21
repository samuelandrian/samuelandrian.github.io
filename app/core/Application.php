<?php

class Application
{
	protected $controller ='homeController';
	protected $action = 'index';
	protected $prams = [];

	public function __construct()
	{
		
		$this->prepareURL();
		//echo $this->controller, ' <br> ' ,$this->action;
		//echo $this->controller, ' <br> ' ,$this->action,'<br>',print_r($this->prams);

		if(file_exists(CONTROLLER.$this->controller.'.php'))
		{//jika dipanggil di page index.php maka CONTROLLER disini akan eksis
			//echo 'tai anjing';//ngecek lewat sini apa engga
			$this->controller = new $this->controller;// membuat instances dari homeController karna atribut $controller ($this->controller) nilainya di assign menjadi homeController
			
			//$this->controller->index();


			if(method_exists($this->controller, $this->action))//check pada kelas homeController apakah ada method index exist?
			{
				//echo 'tai anjing';//check lewat sini apa engga

				call_user_func_array([$this->controller, $this->action],$this->prams);//$this->prams menjadi parameter yang dimasukan kedalam method index($id='',$prams='') pada class homeController		
			}



		}


	}
	protected function prepareURL()
	{
		$request = trim($_SERVER['REQUEST_URI'],'/');//fungsi trim menghilangkan parameter '/' tertentu dari pinggir awal dan pinggir akhir string
		if(!empty($request))
		{
			$url = explode('/',$request);//menjadikan string $request jadi array $url

			$this->controller = isset($url[0]) ? $url[0] .'Controller':'homeController';//nilai $controller di assign menjadi homeController
			$this->action = isset($url[1]) ? $url[1] : 'index';
			unset($url[0],$url[1]);
			$this->prams = !empty($url) ? array_values($url) : [];


			//The var_dump() function is used to display structured information (type and value) about one or more variables.
		}
	}

}