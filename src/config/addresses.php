<?php
/**
 * Created by PhpStorm.
 * User: mihai
 * Date: 12/5/17
 * Time: 12:22 PM.
 */

return [

    'addressables' => [
        'owner' => \App\Owner::class,
        'user'  => \App\User::class,
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
