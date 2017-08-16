<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
  echo "成功！";
});

Macaw::get('', 'App\Controllers\HomeController@home');

Macaw::get('article', 'App\Controllers\HomeController@article');
Macaw::get('comment', 'App\Controllers\HomeController@comment');

Macaw::$error_callback = function() {

  throw new Exception("路由无匹配项 404 Not Found");

};



Macaw::dispatch();

?>