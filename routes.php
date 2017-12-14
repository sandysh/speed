<?php

/**
* 
*/

Router::get('','IndexController@index');
Router::get('test', 'TestController@index');
Router::post('test/post', 'TestController@postData');

// $routes = [
//            '' => 'Controllers/IndexController.php@index',
//             'test' => 'Controllers/TestController.php@index',
//             // 'about/1/sandesh' => 'controllers/AboutController.php@index',
//             // 'contact' => 'controllers/ContactController.php@index',
// ];


