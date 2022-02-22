<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'portal'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'pagri_old' => [
            'driver' => 'mysql',
            'host' => '192.168.10.10',
            'port' => '3306',
            'database' => 'pagri',
            'username' => 'homestead',
            'password' => 'secret',
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'portal' => [
            'driver' => 'mysql',
            'host' => env('PORTAL_DB_HOST', '127.0.0.1'),
            'port' => env('PORTAL_DB_PORT', '3306'),
            'database' => env('PORTAL_DB_DATABASE', 'forge'),
            'username' => env('PORTAL_DB_USERNAME', 'forge'),
            'password' => env('PORTAL_DB_PASSWORD', ''),
            'unix_socket' => env('PORTAL_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pagri' => [
            'driver' => 'mysql',
            'host' => env('PAGRI_DB_HOST', '127.0.0.1'),
            'port' => env('PAGRI_DB_PORT', '3306'),
            'database' => env('PAGRI_DB_DATABASE', 'forge'),
            'username' => env('PAGRI_DB_USERNAME', 'forge'),
            'password' => env('PAGRI_DB_PASSWORD', ''),
            'unix_socket' => env('PAGRI_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'sise' => [
            'driver' => 'mysql',
            'host' => env('SISE_DB_HOST', '127.0.0.1'),
            'port' => env('SISE_DB_PORT', '3306'),
            'database' => env('SISE_DB_DATABASE', 'forge'),
            'username' => env('SISE_DB_USERNAME', 'forge'),
            'password' => env('SISE_DB_PASSWORD', ''),
            'unix_socket' => env('SISE_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        '4h' => [
            'driver' => 'mysql',
            'host' => env('4H_DB_HOST', '127.0.0.1'),
            'port' => env('4H_DB_PORT', '3306'),
            'database' => env('4H_DB_DATABASE', 'forge'),
            'username' => env('4H_DB_USERNAME', 'forge'),
            'password' => env('4H_DB_PASSWORD', ''),
            'unix_socket' => env('4H_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'cfc' => [
            'driver' => 'mysql',
            'host' => env('CFC_DB_HOST', '127.0.0.1'),
            'port' => env('CFC_DB_PORT', '3306'),
            'database' => env('CFC_DB_DATABASE', 'forge'),
            'username' => env('CFC_DB_USERNAME', 'forge'),
            'password' => env('CFC_DB_PASSWORD', ''),
            'unix_socket' => env('CFC_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'drc' => [
            'driver' => 'mysql',
            'host' => env('DRC_DB_HOST', '127.0.0.1'),
            'port' => env('DRC_DB_PORT', '3306'),
            'database' => env('DRC_DB_DATABASE', 'forge'),
            'username' => env('DRC_DB_USERNAME', 'forge'),
            'password' => env('DRC_DB_PASSWORD', ''),
            'unix_socket' => env('DRC_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'volunteer' => [
            'driver' => 'mysql',
            'host' => env('VOLUNTEER_DB_HOST', '127.0.0.1'),
            'port' => env('VOLUNTEER_DB_PORT', '3306'),
            'database' => env('VOLUNTEER_DB_DATABASE', 'forge'),
            'username' => env('VOLUNTEER_DB_USERNAME', 'forge'),
            'password' => env('VOLUNTEER_DB_PASSWORD', ''),
            'unix_socket' => env('VOLUNTEER_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'ticket' => [
            'driver' => 'mysql',
            'host' => env('TICKET_DB_HOST', '127.0.0.1'),
            'port' => env('TICKET_DB_PORT', '3306'),
            'database' => env('TICKET_DB_DATABASE', 'forge'),
            'username' => env('TICKET_DB_USERNAME', 'forge'),
            'password' => env('TICKET_DB_PASSWORD', ''),
            'unix_socket' => env('TICKET_DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
