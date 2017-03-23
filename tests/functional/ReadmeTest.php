<?php
/**
 * README plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\tests\functinal;

use hidev\tests\functional\Tester;

class ReadmeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Tester
     */
    protected $tester;

    public $clean = false;

    protected function setUp()
    {
        $this->tester = new Tester($this);
    }

    protected function tearDown()
    {
        $this->tester = null;
    }

    protected function prepare($subdir)
    {
        $dir = __DIR__ . DIRECTORY_SEPARATOR . $subdir;
        $this->tester->setAlias('@hidev/readme', dirname(dirname(__DIR__)) . '/src');
        $this->tester->config($dir . '/.hidev/config.yml');

        return $dir;
    }

    /**
     * Test defaults.
     */
    public function testMinimal()
    {
        $dir = $this->prepare('minimal');
        $this->tester->hidev('README.md');
        $this->tester->assertFiles($dir, ['.']);
    }

    /**
     * Test options: badges, docs and more.
     */
    public function testMore()
    {
        $dir = $this->prepare('more');
        $this->tester->writeFile('docs/readme/Usage.md', $dir);
        $this->tester->writeFile('docs/readme/Installation.md', $dir);
        $this->tester->hidev('README.md');
        $this->tester->assertFiles($dir, ['.']);
    }
}
