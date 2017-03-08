<?php
/**
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\controllers;

/**
 * Goal for README.md file generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ReadmeMarkdownController extends \hidev\controllers\TemplateController
{
    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        return 'readme-md';
    }

    /**
     * Twig getter.
     * @return \Twig_Environment
     */
    public function getTwig()
    {
        return $this->getReadme()->getTwig();
    }

    /**
     * Readme goal getter.
     * @return ReadmeController
     */
    public function getReadme()
    {
        return $this->takeGoal('readme');
    }
}
