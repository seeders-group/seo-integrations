<?php

namespace Seeders\SeoIntegrations\Integrations\Ahrefs;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Seeders\SeoIntegrations\Exceptions\AhrefsException;

class AhrefsConnector extends Connector
{
    use AcceptsJson;

    protected function defaultAuth(): TokenAuthenticator
    {
        $token = config('seo-integrations.ahrefs.token');

        if (is_null($token)) {
            throw new AhrefsException(__('Ahrefs token is not set in the config file'));
        }

        return new TokenAuthenticator(token: $token);
    }

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://api.ahrefs.com/v3';
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Default HTTP client options
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
