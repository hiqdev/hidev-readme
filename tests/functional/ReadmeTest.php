<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\functinal;

use hidev\tests\functional\Tester;

class ReadmeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Tester
     */
    protected $tester;

    protected function setUp()
    {
        $this->tester = new Tester($this);
    }

    protected function tearDown()
    {
        $this->tester = null;
    }

    /**
     * Test minimal.
     */
    public function testMinimal()
    {
        $dir = __DIR__ . DIRECTORY_SEPARATOR . 'minimal';
        $this->tester->config($dir . '/.hidev/config.yml');
        $this->tester->hidev('README.md');
        $this->tester->assertFiles($dir, ['.']);
    }

    /**
     * Test options.
     */
    public function testMore()
    {
        $dir = __DIR__ . DIRECTORY_SEPARATOR . 'more';
        $this->tester->config($dir . '/.hidev/config.yml');
        $this->tester->hidev('README.md');
        $this->tester->assertFiles($dir, ['.']);
    }

    /**
     * Test docs/readme.
     */
    public function testDocs()
    {
        $dir = __DIR__ . DIRECTORY_SEPARATOR . 'docs';
        $this->tester->config($dir . '/.hidev/config.yml');
        $this->tester->writeFile('docs/readme/Usage.md', $dir);
        $this->tester->writeFile('docs/readme/Installation.md', $dir);
        $this->tester->hidev('README.md');
        $this->tester->assertFiles($dir, ['.']);
    }
}
