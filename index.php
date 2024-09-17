<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('deichrakete/color-schemes', [
    'fields' => [
        'colorscheme' => [
            'props' => [
                'options' => function (): array {
                    if (option('deichrakete.color-schemes.schemes')) {
                        $options = option('deichrakete.color-schemes');
                        return $options;
                    }
                    return [];
                },
                'value' => function (string $value = 'default'): string {
                    return $value;
                },
            ],
        ],
    ],
    'options' => [
        'schemes' => [
            [
                'name' => 'default',
                'class' => 'default',
                'label' => 'Default',
                'colors' => [
                    'background' => '#ffffff',
                    'text' => '#000000',
                    'secondary' => '#00ffff',
                ],
            ]
        ],
    ],
    'translations' => [
        'en' => [
            'deichrakete.color-schemes.title' => 'Color Schemes',
        ],
        'de' => [
            'deichrakete.color-schemes.title' => 'Farbschemata',
        ],
    ],
]);
