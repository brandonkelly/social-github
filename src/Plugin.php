<?php
namespace dukt\social\github;

/**
 * Plugin represents the GitHub integration plugin.
 *
 * @author    Dukt <support@dukt.net>
 * @since     1.0
 */
class Plugin extends \craft\base\Plugin
{
    /**
     * Returns Social login provider class names.
     *
     * @return array
     */
    public function getSocialLoginProviders()
    {
        return [
            'dukt\social\github\loginproviders\Github'
        ];
    }
}