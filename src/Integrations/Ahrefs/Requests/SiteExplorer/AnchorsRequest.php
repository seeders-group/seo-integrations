<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use App\Data\Ahrefs\SiteExplorer\AnchorsRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class AnchorsRequest extends Request
{
    public function __construct(public AnchorsRequestData $data)
    {
    }

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/site-explorer/anchors';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
