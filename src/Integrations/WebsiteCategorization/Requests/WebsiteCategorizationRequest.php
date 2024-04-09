<?php

namespace App\Http\Integrations\WebsiteCategorization\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasFormBody;

class WebsiteCategorizationRequest extends Request implements HasBody
{
    use HasFormBody;

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    public function __construct(public string $domain)
    {

    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '';
    }

    protected function defaultBody(): array
    {
        return [
            'query' => $this->domain,
            'data_type' => 'url',
            'api_key' => config('services.website_categorization.api_key'),
        ];
    }
}
