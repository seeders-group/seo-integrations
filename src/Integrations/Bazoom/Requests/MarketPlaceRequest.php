<?php

namespace App\Http\Integrations\Bazoom\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class MarketPlaceRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(
        public readonly int $pageNumber = 1,
    ) {
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/marketplace';
    }

    protected function defaultQuery(): array
    {
        return [
            'pageNumber' => $this->pageNumber,
            'pageSize' => config('services.bazoom.page_size'),
        ];
    }
}
