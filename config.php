<?php 
$config = [
    'debug'=> true,
    'db'=>[
    	'database_type' => 'mysql',
    	'database_name' => 'blog',
    	'server' => '127.0.0.1:8889',
    	'username' => 'root',
    	'password' => 'root'
    ],
    'log'=>[
    	'error-log'=>'log/error-log.log',
    	'access-log'=>'log/access-log.log'
    ]

];

 ?>