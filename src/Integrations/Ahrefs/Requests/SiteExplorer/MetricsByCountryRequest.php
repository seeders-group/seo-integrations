<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use App\Data\Ahrefs\SiteExplorer\MetricsByCountryRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class MetricsByCountryRequest extends Request
{
    public function __construct(public MetricsByCountryRequestData $data)
    {
    }

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/site-explorer/metrics-by-country';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
