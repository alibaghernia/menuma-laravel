<?php

return [
    'register' => [
        'title' => 'Register in customer club',
        'form' => [
            'fields' => [
                'name' => 'Name',
                'family' => 'Family',
                'gender' => 'Gender',
                'birthday' => [
                    'title' => 'Date of birth',
                    'day' => 'Day',
                    'month' => 'Month',
                    'year' => 'Year',
                ],
                'mobile_number' => 'Mobile Number',
            ],
            'actions' => [
                'register' => 'Register'
            ],
        ],

    ],
];
