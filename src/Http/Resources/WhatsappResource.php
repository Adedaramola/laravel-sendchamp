<?php

declare(strict_types=1);

namespace Adedaramola\Sendchamp\Http\Resources;

use Adedaramola\Sendchamp\Http\Requests\WhatsappLocationRequest;
use Adedaramola\Sendchamp\Http\Requests\WhatsappMessageRequest;

final class WhatsappResource extends Resource
{
    // this works for text, video, audio and sticker messages
    public function sendMessage(WhatsappMessageRequest $request)
    {
        $response = $this->client->post('/whatsapp/message/send', $request->toArray());

        $this->throwFailedErrorResponse($response);

        return $response->object();
    }

    public function sendLocation(WhatsappLocationRequest $request)
    {
        $response = $this->client->post('/whatsapp/message/send', $request->toArray());

        $this->throwFailedErrorResponse($response);

        return $response->object();
    }
}
