<?php

require_once Bundle::path('activerecord').'ActiveRecord.php';

Event::listen('laravel.started: activerecord', function()
{
	$connections = Config::get('database.connections');
	$default = Config::get('database.default');

	$prepared = array();

	// Prepare database connections for ActiveRecord
	foreach($connections as $k=> $conn)
	{
		if($k == 'sqlite')
		{
			$prepared[$k] = $conn['driver'] .'://'. $conn['database'];
		}
		else
		{
			$prepared[$k] = $conn['driver'] .'://'. $conn['username'] .':'. $conn['password'] .'@'. $conn['host'] .'/'. $conn['database'];
		}

		if(in_array($k, array('mysql', 'pgsql')))
		{
			$prepared[$k] .= ';charset='. $conn['charset'];
		}
	}

	// Initialize the configuration
	\ActiveRecord\Config::initialize(function($cfg) use($prepared, $default)
	{
	    $cfg->set_model_directory(Config::get('activerecord::config.models_dir'));
	    $cfg->set_connections($prepared);
	    $cfg->set_default_connection($default);
	});
});