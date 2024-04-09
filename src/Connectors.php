<?php

namespace Seeders\SeoIntegrations;

use Seeders\SeoIntegrations\Integrations\Ahrefs\AhrefsRequests;

class Connectors
{
    public function ahrefs()
    {
        return new AhrefsRequests();
    }

    public function majestic()
    {

    }

    public function moz()
    {

    }
}
