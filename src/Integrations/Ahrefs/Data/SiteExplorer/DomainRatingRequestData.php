<?php

namespace Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

class DomainRatingRequestData extends Data
{
    public function __construct(
        public string $target,
        #[WithTransformer(DateTimeInterfaceTransformer::class, format: 'Y-m-d')]
        public Carbon $date,
        public string $protocol = 'both',
    ) {

    }
}
