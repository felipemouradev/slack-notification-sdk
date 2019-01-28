<?php

namespace felipemouradev\SlackNotification;

use GuzzleHttp\Client;

class SlackNotificationSdk
{
    private $client = null;

    function __construct()
    {
        $this->client = new Client(['base_uri' => getenv('ENDPOINT_SLACK_NOTIFICATION')]);
    }

    public function notify($notificationIdOrSlug, $variables)
    {
        try {
            $this->client->request('POST', "notification/" . $notificationIdOrSlug . "/send", [
                'json' => $variables
            ]);
        } catch (\Exception $exception) {
        }
    }
}

