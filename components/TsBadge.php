<?php namespace Codedge\Trustedshops\Components;

use Cms\Classes\ComponentBase;
use Codedge\Trustedshops\Models\Settings;

class TsBadge extends ComponentBase
{
    /**
     * @var bool
     */
    public $isEnabled = false;

    /**
     * @var string Trusted Shops ID
     */
    public $tsId = '';

    /**
     * @var string
     */
    public $variant = '';

    /**
     * @var string
     */
    public $trustcardDirection = '';

    /**
     * @var string
     */
    public $trustcardTrigger = '';

    /**
     * @var int
     */
    public $width = 40;

    /**
     * @var int
     */
    public $height = 40;

    /**
     * @var string
     */
    public $customCheckoutElementId = '';


    public function componentDetails()
    {
        return [
            'name'        => 'TS Badge',
            'description' => 'Inserts the TS Badge into your site.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        $this->isEnabled = Settings::get('enable_badge');
        $this->tsId = Settings::get('ts_id');
        $this->variant = Settings::get('badge_variant');
        $this->trustcardDirection = Settings::get('badge_trustcard_direction');
        $this->trustcardTrigger = Settings::get('badge_trustcard_trigger');
        $this->width = Settings::get('badge_width');

        if($this->width < 40) {
            $this->width = 40;
        } elseif ($this->width > 90) {
            $this->width = 90;
        }

        $this->height = Settings::get('badge_height');

        if($this->height < 40) {
            $this->height = 40;
        } elseif ($this->height > 90) {
            $this->height = 90;
        }

        $this->customCheckoutElementId = Settings::get('badge_custom_checkout_element_id');
    }
}