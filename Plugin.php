<?php namespace Codecycler\Robots;

use Backend;
use System\Classes\PluginBase;

/**
 * Robots Plugin Information File
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Robots',
            'description' => 'codecycler.robots::lang.plugin.description',
            'author'      => 'Codecycler',
            'icon'        => 'icon-android',
        ];
    }

    public function registerPermissions()
    {
        return [
            'codecycler.robots' => [
                'tab' => 'Robots',
                'label' => 'codecycler.robots::lang.permissions.access',
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'options' => [
                'label' => 'Robots',
                'description' => 'codecycler.robots::lang.plugin.description',
                'icon' => 'icon-android',
                'class' => 'Codecycler\Robots\Models\Settings',
                'order' => 600,
                'category' => 'SEO',
            ],
        ];
    }
}
