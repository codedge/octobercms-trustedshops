<?php namespace Codedge\Trustedshops\Components;

use Cms\Classes\ComponentBase;
use Codedge\TrustedShops\Models\Settings;

class TsReview extends ComponentBase
{
    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $sku;

    /**
     * @var string Trusted Shops ID
     */
    public $tsId;

    /**
     * @var string
     */
    public $variant;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var string
     */
    public $starColor;

    /**
     * @var int
     */
    public $starSize;

    /**
     * @var string
     */
    public $introText;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $maxHeight;

    /**
     * @var string
     */
    public $elementContainer;

    /**
     * @var bool
     */
    public $ratingSummary;


    public function componentDetails()
    {
        return [
            'name'        => 'TS Review',
            'description' => 'Displays Trusted Shops product reviews'
        ];
    }

    public function defineProperties()
    {
        return [
            'sku' => [
                'title'         => 'SKU',
                'description'   => 'The SKU of the product',
                'default'       => '',
                'type'          => 'string',
                'placeholder'   => 'Enter the products sku here...'
            ]
        ];
    }

    public function init()
    {
        $this->isEnabled = Settings::get('enable_reviews');
        $this->tsId = Settings::get('ts_id');
        $this->sku = $this->property('sku');
        $this->variant = 'productreviews';
        $this->borderColor = Settings::get('reviews_border_color', '#FFFFFF');
        $this->starColor = Settings::get('reviews_star_color');
        $this->starSize = Settings::get('reviews_star_size');
        $this->introText = Settings::get('reviews_intro_text');
        $this->locale = Settings::get('reviews_locale');
        $this->maxHeight = Settings::get('reviews_max_height');
        $this->elementContainer = Settings::get('reviews_element_container');
        $this->ratingSummary = Settings::get('reviews_summary');
    }

}