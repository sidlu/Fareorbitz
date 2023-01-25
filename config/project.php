<?php

return [
    'currency' => env('APP_CURRENCY', 'AUD'),
    'charges' => env('ADD_CHARGES', 50),
    'pnr_length' => env('PNR_LENGTH', 6),
    'locale' => env('APP_LOCALE', 'English'),
    'amadeus' => [
        'key' => env('AMADEUS_API_KEY', null),
        'secret' => env('AMADEUS_API_SECRET', null),
        'url' => [
            'base' =>  env('AMADEUS_API_URL', null),
            'access' => '/v1/security/oauth2/token',
            'airports' => '/v1/reference-data/locations',
            'flights' => '/v2/shopping/flight-offers',
            'price' => '/v1/shopping/flight-offers/pricing',
        ],
    ],
];
