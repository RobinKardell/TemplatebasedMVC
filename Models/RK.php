<?php
class RK{

    /* 
    getRoutes() is the method that actually checks if the current route is valid or not.
    */
    public function getRoute(){
        global $Routes;
        $uri = $_SERVER['REQUEST_URI'];

        //check if the route is in $Routes
        if(!in_array(explode('?',$uri)[0],$Routes)){
            //TODO :: DO a redirect to a error page
            die("Invalid Route!");
        }

        return $uri;
    }

    /*
    The run() method is the first method that runs.
    run() gets the current route and checks if it is valid.
    if the route is invalid the app doesn't proceed any further
    */
    public function run(){
        //should be capturing the output of this methid, We till as some point();
        $this->getRoute();
    }
}
?>