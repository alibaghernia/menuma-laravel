<?php

return [
    'register' => [
        'title' => 'ثبت نام در باشگاه مشتریان',
        'form' => [
            'fields' => [
                'name' => 'نام',
                'family' => 'نام خانوادگی',
                'gender' => 'جنسیت',
                'birthday' => [
                    'title' => 'تاریخ تولد',
                    'day' => 'روز',
                    'month' => 'ماه',
                    'year' => 'سال',
                ],
                'mobile_number' => 'شماره موبایل',
            ],
        ],
        'actions' => [
            'register' => 'ثبت نام'
        ],
    ],
];
