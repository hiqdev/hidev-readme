<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\goals;

/**
 * Goal for README.md file.
 */
class ReadmeMarkdownGoal extends \hidev\goals\TemplateGoal
{
    public function getTemplate()
    {
        return 'readme-md';
    }

    public function getTwig()
    {
        return $this->getReadme()->getTwig();
    }

    public function getReadme()
    {
        return $this->getConfig()->get('readme');
    }
}
