<?php

namespace Seeders\SeoIntegrations\Integrations\Ahrefs;

use Saloon\Http\Connector;
use Saloon\Http\Request;
use Seeders\SeoIntegrations\Exceptions\AhrefsException;
use Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer\DomainRatingRequestData;
use Seeders\SeoIntegrations\Integrations\Ahrefs\Data\SiteExplorer\DomainRatingResponseData;

class AhrefsRequests
{
    public function domainRating(DomainRatingRequestData $data): DomainRatingResponseData
    {
        $request = new Requests\SiteExplorer\DomainRatingRequest($data);
        $connector = new AhrefsConnector();

        return $this->executeRequest($connector, $request);
    }

    private function executeRequest(Connector $connector, Request $request)
    {
        try {
            $response = $connector->send($request);

            return $request->createDtoFromResponse($response);
        } catch (\Exception $exception) {
            throw new AhrefsException($exception->getMessage());
        }
    }
}
