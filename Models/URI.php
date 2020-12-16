<?php
class URI {

    public static function get($param) {

        if (strpos($_SERVER['REQUEST_URI'], '?') !== false) {
            return explode('&', explode($param.'=', $_SERVER['REQUEST_URI'])[1])[0];
        } else {
            return false;
        }
    }

    /*
    if you have a multi parameters URI for a page then use this function to get all parameters in a array..
    */
    public static function getURIParameters(){
        $uri_components = explode('/', substr($_SERVER['REQUEST_URI'], strlen(BASEDIR)-1));
        unset($uri_components[0]);
        unset($uri_components[1]);
        return $uri_components;
    }
}