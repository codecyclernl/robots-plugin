<?php namespace Codecycler\Robots\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation as ValidationTrait;

class Settings extends Model
{
    use ValidationTrait;

    public $implement = [
        'System.Behaviors.SettingsModel',
    ];

    public $settingsCode = 'codecycler_robots_settings';
    public $settingsFields = 'fields.yaml';
    public $rules = [];
}
