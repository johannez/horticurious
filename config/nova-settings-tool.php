<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | Path to the JSON file where settings are stored.
    |
    */

    'path' => storage_path('app/settings.json'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Label
    |--------------------------------------------------------------------------
    |
    | The text that Nova displays for this tool in the navigation sidebar.
    |
    */

    'sidebar-label' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | The good stuff :). Each setting defined here will render a field in the
    | tool. The only required key is `key`, other available keys include `type`,
    | `label`, `help`, `placeholder`, `language`, and `panel`.
    |
    */

    'settings' => [

        [
            'key' => 'services_intro',
            'label' => 'Introduction',
            'type' => 'textarea',
            'panel' => 'Services',
        ],

        [
            'key' => 'service1_title',
            'label' => 'Service 1 Title',
            'panel' => 'Services',
        ],

        [
            'key' => 'service1_description',
            'label' => 'Service 1 Description',
            'type' => 'textarea',
            'panel' => 'Services',
        ],

        [
            'key' => 'service2_title',
            'label' => 'Service 2 Title',
            'panel' => 'Services',
        ],

        [
            'key' => 'service2_description',
            'label' => 'Service 2 Description',
            'type' => 'textarea',
            'panel' => 'Services',
        ],

        [
            'key' => 'service3_title',
            'label' => 'Service 3 Title',
            'panel' => 'Services',
        ],

        [
            'key' => 'service3_description',
            'label' => 'Service 3 Description',
            'type' => 'textarea',
            'panel' => 'Services',
        ],

        [
            'key' => 'about_title',
            'label' => 'Professional Title(s)',
            'panel' => 'About',
        ],

        [
            'key' => 'about_details',
            'label' => 'Details',
            'type' => 'code',
            'language' => 'htmlmixed',
            'panel' => 'About',
        ],

    ],

];
