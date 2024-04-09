<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use App\Data\Ahrefs\KeywordsExplorer\BacklinksRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class BacklinksRequest extends Request
{
    public function __construct(public BacklinksRequestData $data)
    {
    }

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/site-explorer/all-backlinks';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
