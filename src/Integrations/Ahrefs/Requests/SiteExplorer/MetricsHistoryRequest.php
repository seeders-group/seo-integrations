<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use App\Data\Ahrefs\SiteExplorer\MetricsHistoryRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class MetricsHistoryRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(public MetricsHistoryRequestData $data)
    {
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/site-explorer/metrics-history';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
