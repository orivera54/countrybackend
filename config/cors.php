<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths que permitirán CORS
    |--------------------------------------------------------------------------
    |
    | Define los endpoints donde se permitirá CORS. Puedes usar comodines (*).
    |
    */

    'paths' => ['api/*', 'graphql', 'sanctum/csrf-cookie'],

    /*
    |--------------------------------------------------------------------------
    | Métodos permitidos
    |--------------------------------------------------------------------------
    |
    | Métodos HTTP que serán permitidos en solicitudes CORS.
    |
    */

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

    /*
    |--------------------------------------------------------------------------
    | Orígenes permitidos
    |--------------------------------------------------------------------------
    |
    | Aquí defines desde qué dominios puede accederse a tus endpoints.
    |
    */

    'allowed_origins' => [
        'http://localhost:4200',
        'https://countryapp-qqfda3mrw-orivera54s-projects.vercel.app'
    ],

    /*
    |--------------------------------------------------------------------------
    | Headers permitidos
    |--------------------------------------------------------------------------
    |
    | Encabezados que la solicitud puede enviar.
    |
    */

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization'],

    /*
    |--------------------------------------------------------------------------
    | Headers expuestos en la respuesta
    |--------------------------------------------------------------------------
    |
    | Si quieres que el navegador vea ciertos headers en la respuesta.
    |
    */

    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Duración de la caché en segundos
    |--------------------------------------------------------------------------
    |
    | Define cuánto tiempo debe cachearse la respuesta preflight.
    |
    */

    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | ¿Se permiten credenciales?
    |--------------------------------------------------------------------------
    |
    | Activa si tus llamadas usan cookies, tokens o headers `Authorization`.
    |
    */

    'supports_credentials' => false,

];
