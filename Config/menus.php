<?php

return [

    'backend_sidebar' => [

        'System' => [
            [
                'route'      => 'admin.config.social',
                'text'       => 'Social Manager',
                'icon'       => 'fa-share-alt-square',
                'order'      => 1,
                'permission' => 'manage@social_admin'
            ],
        ]
    ],

    'backend_user_menu' => [
        [
            'route'      => ['admin.user.provider', ['auth_user_id' => app('request')->segment(3)]],
            'text'       => 'Social Providers',
            'icon'       => 'fa-share-alt-square',
            'order'      => 3,
            'permission' => 'manage.update@auth_user'
        ],
    ],

];