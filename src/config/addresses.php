<?php

return [
    'onDelete'         => 'cascade',
    'requestValidator' => 'vendor/laravel-enso/roaddresses/src/app/Http/Request/ValidateAddressRequest.php',
    'formTemplate'     => null,
    'streetTypes'      => [
        'Street'    => 'Strada',
        'Boulevard' => 'Bulevard',
        'Alley'     => 'Alee',
    ],
    'buildingTypes' => [
        'House'   => 'House',
        'Bloc'    => 'Bloc',
        'Offices' => 'Offices',
    ],
    'validations' => [
        'street'      => 'required',
        'locality_id' => 'required',
        'county_id'   => 'required',
        'street_type' => 'required',
        'number'      => 'required',
    ],
    'label' => [
        'separator'  => ' - ',
        'attributes' => [
            'localityName', 'street', 'number',
        ],
    ],
];
