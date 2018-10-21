<?php

return [
    'onDelete' => 'cascade',
    'requestValidator' => 'vendor/laravel-enso/roaddresses/src/app/Http/Request/ValidateAddressRequest.php',
    'formTemplate' => null,
    'streetTypes' => [
        'Street' => 'Street',
        'Boulevard' => 'Boulevard',
        'Alley' => 'Alley',
    ],
    'buildingTypes' => [
        'House' => 'House',
        'Bloc' => 'Bloc',
        'Offices' => 'Offices',
    ],
    'label' => [
        'separator' => ' - ',
        'attributes' => [
            'localityName', 'street', 'number'
        ],
    ]
];
