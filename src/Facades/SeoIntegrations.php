<?php

namespace Seeders\SeoIntegrations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Seeders\SeoIntegrations\SeoIntegrations
 */
class SeoIntegrations extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Seeders\SeoIntegrations\SeoIntegrations::class;
    }
}
