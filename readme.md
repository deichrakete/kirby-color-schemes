# Kirby Color Schemes Plugin

This plugin allows you to easily customize the color schemes of your Kirby website.

**The Kirby Color Schemes plugin is currently in early stages and is a work in progress.**

## Summary

The Kirby Color Schemes plugin provides a simple way to define and apply custom color schemes to your Kirby website. It allows you to define color variables in a configuration file and apply them to your site's CSS.

## Installation

1. Download the plugin files and place them in the `site/plugins/color-schemes` directory of your Kirby installation.
2. In your Kirby configuration file (`site/config/config.php`), add the following line to enable the plugin:

```php
'deichrakete.color-schemes' => [
    'class' => '[&_.button:hover]:no-underline', // add classes to all schemes
    'schemes' => [
        [ // Overwrites the default color scheme
            'name' => 'default', // also the css class
            'label' => 'Default',
            'colors' => [
                'background' => '#ffffff',
                'text' => '#000000',
                'primary' => '#00ffff', // buttons, links, ...
        ],
            'classes' => 'bg-white text-black' // Custom classes e.g. Tailwindcss
        ],
        [
            'name' => 'pastel1',
            'label' => 'Pastel 1',
            'colors' => [
                'background' => '#f2e8d9',
                'text' => '#5c5c5c',
                'primary' => '#b3cdd1',
            ],
        ],
        [
            'name' => 'pastel2',
            'label' => 'Pastel 2',
            'colors' => [
                'background' => '#e8f2d9',
                'text' => '#5c5c5c',
                'primary' => '#d1cbb3',
            ],
        ],
        [
            'name' => 'pastel3',
            'label' => 'Pastel 3',
            'colors' => [
                'background' => '#d9e8f2',
                'text' => '#5c5c5c',
                'primary' => '#b3d1cd',
            ],
        ],
        [
            'name' => 'dark1',
            'label' => 'Dark 1',
            'colors' => [
                'background' => '#1a1a1a',
                'text' => '#ffffff',
                'primary' => '#4d4d4d',
            ],
        ],
    ]
]
```

3. Add a new field to your layout settings blueprint

```php
fields:
    layout:
        type: layout
        layouts:
            - '1/1'
            - '1/2, 1/2'
            - '1/3, 1/3, 1/3'
        fieldsets:
            - heading
            - text
            - accordion
        settings:
            fields:
                scheme:
                    label: Color Scheme
                    type: colorscheme
                    default: default
```

4. Add the `scheme` field to your layout css classes or read the settings from the config.
