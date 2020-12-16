<?php
/*
 * These includes aren't needed because of our __autoload function
 * in the index page. Their being kept as comments because they
 * will be useful for debugging.
 *
 * include_once( 'Classes/Route.php' );
 * include_once( 'Classes/View.php' );
 *
 * Probably shouldn't be calling the View directly from the route, should
 * be calling the controller and then allow the controller to call the route.
 * Will probably change this in the future.
*/
Route::set('', function(){
    View::make('Index');
});
Route::set('AboutUs', function(){
    View::make('AboutUs');
});
Route::set('ContactUs', function(){
    View::make('ContactUs');
});
/*
 * This is an example of a dynamic route. In this example,
 * this route would display a users profile page.
*/
Route::set('user/<1>', function() {
    View::make('UserProfile');
});
Route::set('data/<1>/<2>', function() {
    View::make('Data');
});
?>