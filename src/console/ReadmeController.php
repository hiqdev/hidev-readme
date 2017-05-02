<?php
/**
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\console;


/**
 * README file generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ReadmeController extends \hidev\base\Controller
{
    public $path;

    public $type = 'markdown';

    public function actionIndex()
    {
        $this->take('readme')->save($this->getPath(), $this->type);
    }

    public function getPath()
    {
        return $this->path ?: $this->id;
    }
}
