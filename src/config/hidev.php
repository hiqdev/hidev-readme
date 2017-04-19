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
    'components' => [
        'config' => [
            'readme' => [
                'class' => \hidev\readme\controllers\ReadmeController::class,
                'markdownBadges' => [
                    'github.release'          => '[![GitHub release](https://img.shields.io/github/release/{{ config.github.full_name }}.svg)](https://github.com/{{ config.github.full_name }}/releases)',
                    'github.version'          => '[![GitHub version](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }}.svg)](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }})',
                    'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master)',
                ],
            ],
            'README' => [
                'class' => \hidev\readme\controllers\ReadmeTextController::class,
            ],
            'README.txt' => [
                'class' => \hidev\readme\controllers\ReadmeTextController::class,
            ],
            'README.md' => [
                'class' => \hidev\readme\controllers\ReadmeMarkdownController::class,
            ],
            'README.markdown' => [
                'class' => \hidev\readme\controllers\ReadmeMarkdownController::class,
            ],
            'views' => [
                '@hidev/readme/views',
            ],
        ],
    ],
];
