<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'goals' => [
            'readme'            => [
                'class'          => 'hidev\readme\goals\ReadmeGoal',
                'markdownBadges' => [
                    'github.version'          => '[![GitHub version](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.package }}.svg)](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.package }})',
                    'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master)',
                ],
            ],
            'README'            => 'hidev\readme\goals\ReadmeTextGoal',
            'README.md'         => 'hidev\readme\goals\ReadmeMarkdownGoal',
            'README.txt'        => 'hidev\readme\goals\ReadmeTextGoal',
            'README.markdown'   => 'hidev\readme\goals\ReadmeMarkdownGoal',
        ],
        'views' => [
            '@hidev/readme/views',
        ],
    ],
];
