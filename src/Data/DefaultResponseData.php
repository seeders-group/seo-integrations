<?php

namespace Seeders\SeoIntegrations\Data;

use Spatie\LaravelData\Data;

class DefaultResponseData extends Data
{
    public function __construct(
        public array $response,
        public ?string $errorMessage = null,
        public ?bool $hasErrors = false,
    ) {
    }
}
