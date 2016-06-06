<?php namespace Codedge\Trustedshops\Components;

use Cms\Classes\ComponentBase;
use Codedge\TrustedShops\Models\Settings;

class TsRating extends ComponentBase
{
    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var string Trusted Shops ID
     */
    public $tsId;

    /**
     * @var string
     */
    public $sku;

    /**
     * @var int
     */
    public $starSize;

    /**
     * @var string
     */
    public $starColor;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var bool
     */
    public $scrollToReviews;

    /**
     * @var string
     */
    public $elementContainer;

    public function componentDetails()
    {
        return [
            'name'        => 'TS Rating',
            'description' => 'Shows the TS product rating stars'
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
        $this->isEnabled = Settings::get('enable_rating');
        $this->tsId = Settings::get('ts_id');
        $this->sku = $this->property('sku');
        $this->starSize = Settings::get('rating_star_size');
        $this->starColor = Settings::get('rating_star_color');
        $this->fontSize = Settings::get('rating_font_size');
        $this->elementContainer = Settings::get('rating_element_container');
        $this->scrollToReviews = Settings::get('rating_scroll_to_reviews');
    }

}