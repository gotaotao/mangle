<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'=>'html|xhtml|xml',

	'DB_TYPE' => 'mysql',
	'DB_HOST' => '123.56.108.167',
	'DB_NAME' => 'baike',
	'DB_USER' => 'root',
	'DB_PWD' => '880829',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'jk_',
	'URL_CASE_INSENSITIVE' =>true，

	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则

	    'view/:did\d'             => array('home/doc/sd','from=w'),
	    'sview/:did\d'             => array('home/doc/sd','from=s'),
        'list'                => 'Home/Doc/list',
       
	),
);