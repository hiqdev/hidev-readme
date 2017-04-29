<?php
/**
 * README plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'README' => [
            'class' => \hidev\readme\console\ReadmeTextController::class,
        ],
        'README.txt' => [
            'class' => \hidev\readme\console\ReadmeTextController::class,
        ],
        'README.md' => [
            'class' => \hidev\readme\console\ReadmeMarkdownController::class,
        ],
        'README.markdown' => [
            'class' => \hidev\readme\console\ReadmeMarkdownController::class,
        ],
    ],
    'components' => [
        'readme' => [
            'class' => \hidev\readme\components\Readme::class,
            'knownBadges' => [
                'github.release'          => '[![GitHub release](https://img.shields.io/github/release/{{ app.github.full_name }}.svg)](https://github.com/{{ app.github.full_name }}/releases)',
                'github.version'          => '[![GitHub version](https://badge.fury.io/gh/{{ app.github.vendor }}%2F{{ app.github.name }}.svg)](https://badge.fury.io/gh/{{ app.github.vendor }}%2F{{ app.github.name }})',
                'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ app.vendor.name }}:{{ app.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ app.vendor.name }}:{{ app.package.name }}/dev-master)',
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/readme/views'],
                ],
            ],
        ],
    ],
];
