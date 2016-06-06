<?php namespace Codedge\TrustedShops;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Codedge\TrustedShops\Components\TsBadge'   => 'tsBadge',
            'Codedge\TrustedShops\Components\TsReview'  => 'tsReview',
            'Codedge\TrustedShops\Components\TsRating'  => 'tsRating',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Trusted Shops',
                'description' => 'Configure your Trusted Shops badge, reviews and ratings.',
                'category'    => 'Misc',
                'icon'        => 'icon-cog',
                'class'       => 'Codedge\TrustedShops\Models\Settings',
                'order'       => 200,
                'keywords'    => 'Trusted Shops',
                'permissions' => ['trustedshops.configure_ts']
            ]
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'bool' => function ($v) {
                    return $v ? 'true' : 'false';
                },
            ]
        ];
    }
}
