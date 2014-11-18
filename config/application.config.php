<?php 
 return array(
    'modules' =>  array( 
        '0' => 'Application',
        '1' => 'Users',
        '2' => 'Generator',
        '3' => 'Auth',
    ),
    'module_listener_options' =>  array( 
        'module_paths' =>  array( 
            '0' => './module',
            '1' => './vendor',
        ),
        'config_glob_paths' =>  array( 
            '0' => 'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);