<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Http\Resources;

use Adedaramola\Sendchamp\Exceptions\SendchampApiException;
use Adedaramola\Sendchamp\Http\Client;

class Resource
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function throwFailedErrorResponse($response)
    {
        if ($response->failed() || $response->clientError() || $response->serverError()) {
            throw new SendchampApiException($response);
        }
    }
}
