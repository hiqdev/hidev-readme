<?php
/**
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\unit\components;

use hidev\readme\components\Readme;

/**
 * Readme component test class.
 */
class ReadmeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Readme
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Readme();
    }

    protected function tearDown()
    {
    }

    public function testRenderH1()
    {
        $this->assertSame("# Test\n", $this->object->renderH1('Test'));
    }

    public function testRenderH2()
    {
        $this->assertSame("## Test\n", $this->object->renderH2('Test'));
    }
}
