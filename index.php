<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('foerdeliebe/color-schemes', [
    'fields' => [
        'colorscheme' => [
            'props' => [
                'options' => function (): array {
                    if (option('foerdeliebe.color-schemes.schemes')) {
                        $options = option('foerdeliebe.color-schemes');
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
            'foerdeliebe.color-schemes.title' => 'Color Schemes',
        ],
        'de' => [
            'foerdeliebe.color-schemes.title' => 'Farbschemata',
        ],
    ],
]);
