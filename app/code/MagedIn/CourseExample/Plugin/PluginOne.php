<?php

namespace MagedIn\CourseExample\Plugin;

use MagedIn\CourseExample\Controller\Examples\Index;

/**
 * Class PluginOne
 *
 * @package MagedIn\CourseExample\Plugin
 */
class PluginOne
{
    public function beforeExecute(Index $subject)
    {
        echo '<br/>Plugin one before.';
    }

    public function aroundExecute(Index $subject, \Closure $proceed)
    {
        echo '<br/>Plugin one around.';
        return $proceed();
    }

    public function afterExecute(Index $subject, $value)
    {
        echo '<br/>Plugin one after.';
        echo $value;
        // return $value;
    }
}
