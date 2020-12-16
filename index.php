<?php
//Start the session
session_start();
/*
Include the init file 
*/
include_once "init.php";
/*
 * The array 'Routes' stores all of the valid routes, you can add
 * new routes by editing the file 'routes/Routes.php'.
*/
$Routes = array();

/*
 * We define the BASEDIR. This is the directory that RK is stored in. This constant
 * will eventually be set by the installer when it is created.
*/
define( 'BASEDIR', '/' );
define( 'URL', 'http://sparel.robinkardell.com/');

//Autoload all models that help us to easy work with all models.
spl_autoload_register(function ($class_name){
    if(file_exists('Models/'.$class_name.'.php')){
        require_once 'Models/'.$class_name.'.php';
    }
});

/*
By Including Route.php we get access to the $Routes array 
containing all of the valid routes for our app
*/
include 'Routes.php';

//We create a new instance of the "RK" object and execute the run method.
$rk = new RK();
// Start the APP
$rk->run();
?>