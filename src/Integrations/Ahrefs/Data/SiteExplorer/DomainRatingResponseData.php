<?php

namespace Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer;

use Spatie\LaravelData\Data;

class DomainRatingResponseData extends Data
{
    public function __construct(
        public int|float $domainRating,
        public ?int $ahrefsRank,
    ) {
    }
}
