<?php
//kode dalam file htdocs membuat semua alamat yang dimasukan ke query kembali ke index.php


//kumpulan kode dibawah ini untuk :
define('ROOT',dirname( __DIR__ ) . DIRECTORY_SEPARATOR);//ROOT di definisikan memiliki value PathGrandparentFolder/   kalau echo dirname(__FILE__); untuk memprint path parentfolder
define('APP', ROOT.'app'.DIRECTORY_SEPARATOR);//APP didefinisikan memiliki value ROOT/app/
define('VIEW',ROOT.'app'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('MODEL',ROOT.'app'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
define('DATA',ROOT.'app'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR);
define('CORE',ROOT.'app'.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
$modules = [ROOT,APP,CORE,CONTROLLER,DATA];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR, $modules));
//implode(pemisah,array) menjadikan aray jadi satu string
//implode(PATH_SEPARATOR, $modules)); outputnya :ROOT;APP;CORE;CONTROLLER;DATA
//
//get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR, $modules)); outputnya : .;C:\php\pear;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\core\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\controller\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\data\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\core\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\controller\;C:\xampp\htdocs\TutorialMVC\TutorialMVC1\app\data\


//set_include_path(string $new_include_path) : Sets the "include_path" configuration option for the duration of the script.
//Returns the old include_path on success or FALSE on failure.

//The var_dump(); function is used to display structured information (type and value) about one or more variables.

spl_autoload_register('spl_autoload',false);//supaya dapat memanggil class lain di folder yang berbeda tanpa menggunakan code include('file.php'); karna include path nya telah diset oleh set_include_path kedalam sebuar register

new Application;






