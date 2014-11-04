<?php


	define('DEFAULT_DB', APP.DS.'sqlite'.DS.'default.sqlite');

class DATABASE_CONFIG {

        public $default = array(
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        'database' => DEFAULT_DB,
        'prefix' => ''
        //'encoding' =&gt; 'utf8',
    );
}
	
?>
