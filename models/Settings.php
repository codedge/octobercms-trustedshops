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
        'badge_width'               => 'required|between:40,90',
        'badge_height'              => 'required|between:40,90',
        'ts_id'                     => 'required',
        'reviews_border_color'      => 'required',
        'reviews_star_color'        => 'required',
        'reviews_star_size'         => 'required|numeric',
        'reviews_max_height'        => 'required|numeric',
        'reviews_locale'            => 'required|alpha_dash',
        'reviews_element_container' => 'required',
        'rating_font_size'          => 'required|numeric',
        'rating_star_color'         => 'required',
        'rating_star_size'          => 'required|numeric',
        'rating_element_container'  => 'required',
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