<?php

namespace App\Http\Integrations\Leolytics\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class WebsiteRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/websites';
    }
}
