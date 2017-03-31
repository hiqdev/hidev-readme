<?php
/**
 * README plugin for HiDev.
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\controllers;

use hidev\helpers\Helper;
use Yii;

/**
 * Goal for README.file generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ReadmeController extends \hidev\controllers\TemplateController
{
    /**
     * @var \Twig_Environment
     */
    protected $_twig;

    /**
     * @var array list of sections to render
     */
    protected $_sections;

    /**
     * Get charset.
     * @return string
     */
    public function getCharset()
    {
        return (isset(Yii::$app->charset) ? Yii::$app->charset : null) ?: mb_internal_encoding();
    }

    public function renderH($title, $prefix)
    {
        return $prefix . ' ' . $title . "\n";
    }

    public function renderH1($title)
    {
        return $this->renderH($title, '#');
    }

    public function renderH2($title)
    {
        return $this->renderH($title, '##');
    }

    public function renderH3($title)
    {
        return $this->renderH($title, '###');
    }

    public function renderText($text)
    {
        $text = trim($text);

        return $text ? "\n$text\n" : '';
    }

    public function renderBold($text)
    {
        $text = trim($text);

        return $this->renderText('**' . $text . '**');
    }

    public function renderSection($section, $default = null)
    {
        $file = 'readme/' . str_replace(' ', '', $section);
        $path = Yii::getAlias("@root/docs/$file.md");
        $text = file_exists($path) ? file_get_contents($path) : $this->getSection($file, $default);
        $text = trim($text);

        return $text ? "\n## $section\n\n$text\n" : '';
    }

    public function getSection($file, $default = null)
    {
        $view = Yii::$app->getView();
        $tpl = Helper::file2template($file);
        try {
            $res = $view->render($tpl, ['config' => $this->takeConfig()]);
        } catch (\Exception $e) {
            $res = '';
        }

        return $res ?: $default;
    }

    /**
     * Set sections list.
     * @param array $value
     */
    public function setSections($value)
    {
        $this->_sections = (array) $value;
    }

    /**
     * Returns sections list. Returns default list if not set.
     * @return array
     */
    public function getSections()
    {
        if (empty($this->_sections)) {
            $this->_sections = ['Requirements', 'Installation', 'Idea', 'Configuration', 'Basic Usage', 'Usage', 'Support', 'License', 'Acknowledgements', 'Acknowledgments'];
        }

        return array_unique($this->_sections);
    }

    /**
     * Render all configured sections.
     * @return string
     */
    public function renderSections($sections = null)
    {
        if ($sections === null) {
            $sections = $this->getSections();
        }
        $res = '';
        foreach ($sections as $section) {
            $res .= $this->renderSection($section);
        }

        return $res;
    }

    /**
     * Render all configured badges.
     * @return string
     */
    public function renderBadges()
    {
        $badges = $this->badges;
        if (!$badges) {
            return '';
        }
        $pm = $this->takeGoal('package')->getPackageManager();
        if (!$pm || !$pm->getConfiguration()->getRequire()) {
            unset($badges['versioneye.dependencies']);
        }
        $res = '';
        foreach ($badges as $badge => $tpl) {
            if (!$tpl) {
                $tpl = $this->markdownBadges[$badge];
            }
            if ($tpl === 'disabled') {
                continue;
            }
            $res .= $this->renderBadge($tpl) . "\n";
        }

        return $res ? "\n$res" : '';
    }

    /**
     * Render badge by given template.
     * @param string $template string to render
     * @return string
     */
    public function renderBadge($template)
    {
        return $this->getTwig()->render($template, ['config' => $this->takeConfig()]);
    }

    /**
     * Twig getter.
     * @return \Twig_Environment
     */
    public function getTwig()
    {
        if ($this->_twig === null) {
            $this->_twig = new \Twig_Environment(new \Twig_Loader_String());
        }

        return $this->_twig;
    }
}
