<?php namespace Codedge\TrustedShops\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation rules
     */
    public $rules = [
        'ts_id'                 => 'required',

        'rating_font_size'      => 'required|numeric',
        'rating_star_color'     => 'required',
        'rating_star_size'      => 'required|numeric',
    ];

    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string
     */
    public $settingsCode = 'codedge_trustedshops_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}