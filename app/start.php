<?php

session_start();

$_SESSION['user_id'] = 1;

require_once __DIR__.'/../vendor/autoload.php';

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:P@ssword123@localhost/php_active_record',
       'test' => 'mysql://username:password@localhost/test_database_name',
       'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});
