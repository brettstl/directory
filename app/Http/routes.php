<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'HomeController@index');
$router->get('/staff', function(){
  $staff = [
    ['name' => "Diego Lorenzo", 'position' => "Pop Up God", 'email' => "diego@detone8.com", 'phone' => "444 4444", 'bio' => "Diego is a great guy, and works at Detone8."],
    ['name' => "Brett Lohmeyer", 'position' => "Worker bee", 'email' => "brett@detone8.com", 'phone' => "444 4444", 'bio' => "Brett is a great guy, and works at Detone8."],
    ['name' => "Kevin Solorio", 'position' => "Pres", 'email' => "kevin@detone8.com", 'phone' => "444 4444", 'bio' => "K-Dog is a great guy, and works at Detone8."]
  ];

  return view('staff.index', compact('staff'));
});

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

$router->controller('auth', 'AuthController');

$router->controller('password', 'PasswordController');
