<?php

namespace MagedIn\CourseExample\Plugin;

use MagedIn\CourseExample\Controller\Examples\Index;

/**
 * Class PluginOne
 *
 * @package MagedIn\CourseExample\Plugin
 */
class PluginTwo
{
    public function beforeExecute(Index $subject)
    {
        echo '<br/>Plugin TWO before.';
    }

    public function aroundExecute(Index $subject, \Closure $proceed)
    {
        echo '<br/>Plugin TWO around.';
        return $proceed();
    }

    public function afterExecute(Index $subject, $value)
    {
        echo '<br/>Plugin TWO after.';
        echo $value;
        return $value;
    }
}
