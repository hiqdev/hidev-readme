<?php
/**
 * README plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\console;

use hidev\helpers\FileHelper;
use Yii;

/**
 * Goal for README.md file generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ReadmeMarkdownController extends \hidev\base\Controller
{
    public $path;

    public function actionIndex()
    {
        FileHelper::write($this->getPath(), $this->getContent());
    }

    public function getPath()
    {
        return $this->path ?: $this->id;
    }

    public function getContent()
    {
        return $this->getComponent()->render('readme-md');
    }

    public function getComponent()
    {
        return $this->getApp()->get('readme');
    }
}
