<?php

namespace App\Http\Integrations\Moz;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class MozLinksConnector extends Connector
{
    use AcceptsJson;

    public function __construct()
    {
        $this->withBasicAuth(config('services.moz.client_id'), config('services.moz.client_secret'));
    }

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://lsapi.seomoz.com/v2';
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
