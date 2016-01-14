<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\unit\controllers;

use hidev\readme\controllers\ReadmeController;

/**
 * Readme Controller test class.
 */
class ReadmeControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReadmeController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ReadmeController('README', null);
    }

    protected function tearDown()
    {
    }

    public function testRenderH1()
    {
        $this->assertSame("Test\n====\n", $this->object->renderH1('Test'));
    }

    public function testRenderH2()
    {
        $this->assertSame("Test\n----\n", $this->object->renderH2('Test'));
    }
}
