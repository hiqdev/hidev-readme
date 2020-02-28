<?php
/**
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'app' => [
        'controllerMap' => [
            'README' => [
                '__class' => \hidev\readme\console\ReadmeController::class,
                'type' => 'text',
            ],
            'README.md' => [
                '__class' => \hidev\readme\console\ReadmeController::class,
                'type' => 'markdown',
            ],
        ],
    ],
    'readme' => [
        '__class' => \hidev\readme\components\Readme::class,
        'knownBadges' => [
            'github.release'          => '[![GitHub release](https://img.shields.io/github/release/{{ app.github.full_name }}.svg)](https://github.com/{{ app.github.full_name }}/releases)',
            'github.version'          => '[![GitHub version](https://badge.fury.io/gh/{{ app.github.vendor }}%2F{{ app.github.name }}.svg)](https://badge.fury.io/gh/{{ app.github.vendor }}%2F{{ app.github.name }})',
        ],
    ],

    'theme' => [
        'pathMap' => [
            '@hidev/views' => ['@hidev/readme/views'],
        ],
    ],
];
