<?php

return [
    'onDelete'         => 'cascade',
    'formTemplate'     => null,
    'streetTypes'      => [
        'Street'    => 'Street',
        'Boulevard' => 'Boulevard',
        'Alley'     => 'Alley',
    ],
    'buildingTypes' => [
        'House'   => 'House',
        'Bloc'    => 'Bloc',
        'Offices' => 'Offices',
    ],
    'label' => [
        'separator'  => ' - ',
        'attributes' => [
            'localityName', 'street', 'number',
        ],
    ],
];
