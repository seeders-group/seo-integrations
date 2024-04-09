<?php

namespace App\Http\Integrations\Ahrefs\Requests;

use App\Data\Ahrefs\SerpOverview\SerpOverviewRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class SerpOverviewRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        public SerpOverviewRequestData $data,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/serp-overview/serp-overview';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
