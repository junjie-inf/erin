<?php

return array(

	
	'fetch' => PDO::FETCH_CLASS,

	
	'default' => 'pgsql',

	
	'connections' => array(

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => '163.117.154.106',
			'port'     => '5434',
			'database' => 'erin',
			'username' => 'postgres',
			'password' => 'ibiscluster',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),
	),


	'migrations' => 'migrations',

	'redis' => array(

		'cluster' => true,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
