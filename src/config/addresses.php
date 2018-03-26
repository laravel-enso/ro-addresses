<?php

return [
    'addressables' => [
        'owner' => \App\Owner::class,
    ],
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
    'validations' => [
        'street' => 'required',
        'locality_id' => 'required',
        'county_id' => 'required',
    ],
    'label' => [
        'separator' => ' / ',
        'attributes' => ['locality_name', 'street', 'number'],
    ]
];
