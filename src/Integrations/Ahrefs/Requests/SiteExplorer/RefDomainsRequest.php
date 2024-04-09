<?php

namespace App\Http\Integrations\Ahrefs\Requests\SiteExplorer;

use Carbon\Carbon;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class RefDomainsRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(public string $domain, public int $offset = 0, public ?Carbon $since = null)
    {

    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/site-explorer/refdomains';
    }

    protected function defaultQuery(): array
    {
        return [
            'select' => 'domain',
            'target' => $this->domain,
            'history' => $this->since ? 'since:'.$this->since->format('Y-m-d') : 'all_time',
            'offset' => $this->offset,
            'limit' => config('services.ahrefs.refDomainLimit'),
        ];
    }
}
