<?php

return [

    'addressables' => [
        'owner' => \App\Owner::class,
    ],
    'streetTypes'  => [
        'Street'    => 'Street',
        'Boulevard' => 'Boulevard',
        'Alley'     => 'Alley',
    ],
    'validations'  => [
        'street'      => 'required',
        'locality_id' => 'required',
        'county_id'   => 'required',
        'country_id'  => 'required',
    ],
];
