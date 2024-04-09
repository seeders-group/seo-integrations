<?php

namespace Seeders\SeoIntegrations\Integrations\Ahrefs\Requests\SiteExplorer;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer\DomainRatingRequestData;
use Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer\DomainRatingResponseData;

class DomainRatingRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(public DomainRatingRequestData $data)
    {

    }

    public function createDtoFromResponse(Response $response): DomainRatingResponseData
    {
        $data = $response->json();

        return new DomainRatingResponseData(
            domainRating: $data['domain_rating']['domain_rating'],
            ahrefsRank: $data['domain_rating']['ahrefs_rank'] ?? null,
        );
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/site-explorer/domain-rating';
    }

    protected function defaultQuery(): array
    {
        return $this->data->toArray();
    }
}
