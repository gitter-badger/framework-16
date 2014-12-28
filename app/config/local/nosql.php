<?php

return array(

    'mongo' => array(
        'db' => array(
            'host' => env('MONGO_HOST'),
            'username' => env('MONGO_USERNAME'),
            'password' => env('MONGO_PASSWORD'),
            'port' => '27017',
            ),

        'yourSecondDatabaseName' => array(
            'host' => '',
            'username' => '',
            'password' => '',
            'port' => '',
        )
    // 'provider' => array()  Another noSQL database provider
    ),
);

/* End of file nosql.php */
/* Location: .app/config/local/nosql.php */