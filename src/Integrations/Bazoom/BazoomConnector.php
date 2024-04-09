<?php

namespace App\Http\Integrations\Bazoom;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\HasTimeout;

class BazoomConnector extends Connector
{
    use AcceptsJson;
    use HasTimeout;

    protected int $requestTimeout = 45;

    protected function defaultAuth(): ?Authenticator
    {
        return new BasicAuthenticator(
            config('services.bazoom.username'),
            config('services.bazoom.password')
        );
    }

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://customerapi.bazoom.com/v1';
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
