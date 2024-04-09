<?php

namespace App\Http\Integrations\Ahrefs\Requests\KeywordsExplorer;

use App\Data\Ahrefs\KeywordsExplorer\OverviewRequestData;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class OverviewRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        public OverviewRequestData $data,
    ) {

    }

    public function resolveEndpoint(): string
    {
        return '/keywords-explorer/overview';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
