<?php

/*
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\readme\goals;

use hidev\goals\TemplateGoal;
use hidev\helpers\Helper;
use Yii;

/**
 * Goal for README.
 */
class ReadmeGoal extends TemplateGoal
{
    protected $_twig;

    public function getCharset()
    {
        return Yii::$app->charset ?: mb_internal_encoding();
    }

    public function renderH($title, $char)
    {
        $res = $title . "\n";
        $res .= str_repeat($char, mb_strlen($title, $this->getCharset()));

        return $res . "\n";
    }

    public function renderH1($title)
    {
        return $this->renderH($title, '=');
    }

    public function renderH2($title)
    {
        return $this->renderH($title, '-');
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
        $path = Yii::getAlias("@source/docs/$file.md");
        $text = file_exists($path) ? file_get_contents($path) : $this->getSection($file, $default);
        $text = trim($text);

        return $text ? "\n## $section\n\n$text\n" : '';
    }

    public function getSection($file, $default = null)
    {
        $view = Yii::$app->getView();
        $tpl = Helper::file2template($file);
        try {
            $res = $view->render($tpl, ['config' => $this->config]);
        } catch (\Exception $e) {
            $res = '';
        }

        return $res ?: $default;
    }

    public function getSections()
    {
        return $this->sections ?: ['Requirements', 'Installation', 'Idea', 'Configuration', 'Basic Usage', 'Usage', 'Support', 'License', 'Acknowledgments'];
    }

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

    public function renderBadges()
    {
        $badges = $this->badges;
        if (!$badges) {
            return '';
        }
        if (!$this->package->getPackageManager()->getConfiguration()->getRequire()) {
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

    public function renderBadge($tpl)
    {
        return $this->getTwig()->render($tpl, ['config' => $this->getConfig()]);
    }

    public function getTwig()
    {
        if ($this->_twig === null) {
            $this->_twig = new \Twig_Environment(new \Twig_Loader_String());
        }

        return $this->_twig;
    }
}
