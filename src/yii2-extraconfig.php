<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'readme' => [
                'class'          => 'hidev\readme\controllers\ReadmeController',
                'markdownBadges' => [
                    'github.version'          => '[![GitHub version](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.package }}.svg)](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.package }})',
                    'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master)',
                ],
            ],
            'README' => [
                'class' => 'hidev\readme\controllers\ReadmeTextController',
            ],
            'README.txt' => [
                'class' => 'hidev\readme\controllers\ReadmeTextController',
            ],
            'README.md' => [
                'class' => 'hidev\readme\controllers\ReadmeMarkdownController',
            ],
            'README.markdown' => [
                'class' => 'hidev\readme\controllers\ReadmeMarkdownController',
            ],
            'views' => [
                '@hidev/readme/views',
            ],
        ],
    ],
];
