<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme;

/**
 * Plugin class.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * The items.
     * @var array
     */
    protected $_items = [
        'goals' => [
            'readme'           => 'hidev\readme\goals\ReadmeGoal',
            'README'           => 'hidev\readme\goals\ReadmeGoal',
            'README.md'        => 'hidev\readme\goals\ReadmeGoal',
            'README.txt'       => 'hidev\readme\goals\ReadmeGoal',
            'README.markdown'  => 'hidev\readme\goals\ReadmeGoal',
        ],
        'views' => [
            '@hidev/readme/views',
        ],
    ];
}
