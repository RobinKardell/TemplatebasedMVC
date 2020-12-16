<?php

class View{
    /*
    If the route is valid create the view and the controller
    if the route is invalid do nothing and if something goes wrong
    checking the route and return 0;
    */
    public static function make($view){
        if(Route::isRouteValid()){
            //create the view and the view controller.
            require_once('./Controllers/'.$view.'.php');
            //require_once('./Views/'.$view.'.php');
            Template::view('./Views/'.$view.'.php');
            return 1;
        }
    }
}
?>