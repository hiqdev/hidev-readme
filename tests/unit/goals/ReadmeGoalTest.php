<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\unit\goals;

use hidev\readme\goals\ReadmeGoal;

/**
 * Readme Goal test class.
 */
class ReadmeGoalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReadmeGoal
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ReadmeGoal('README', null);
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
