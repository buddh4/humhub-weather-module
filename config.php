<?php

namespace humhub\modules\weather;

return [
    'id' => 'weather',
    'class' => 'humhub\modules\weather\Module',
    'namespace' => 'humhub\modules\weather',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\weather\Events',
                'addWeatherFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\weather\Events',
                'addWeatherFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\weather\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
