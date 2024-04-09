<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use App\Data\Ahrefs\SiteExplorer\RefDomainHistoryRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class RefdomainHistory extends Request
{
    protected Method $method = Method::GET;

    public function __construct(public RefDomainHistoryRequestData $data)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/site-explorer/refdomains-history';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
