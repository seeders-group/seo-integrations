<?php

namespace App\Http\Integrations\Moz\Requests;

use App\Data\Moz\UrlMetrics\UrlMetricsRequestData;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UrlMetricsRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(public UrlMetricsRequestData $data)
    {

    }

    public function resolveEndpoint(): string
    {
        return '/url_metrics';
    }

    protected function defaultBody(): array
    {
        return $this->data->toArray();
    }
}
