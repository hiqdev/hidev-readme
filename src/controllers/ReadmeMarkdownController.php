<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\controllers;

/**
 * Goal for README.md file.
 */
class ReadmeMarkdownController extends \hidev\controllers\TemplateController
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
        return $this->getGoal('readme');
    }
}
