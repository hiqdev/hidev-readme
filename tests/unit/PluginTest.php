<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\unit;

use hidev\readme\Plugin;

/**
 * Plugin test class.
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Plugin();
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertArrayHasKey('goals', $this->object->getItems());
    }
}
