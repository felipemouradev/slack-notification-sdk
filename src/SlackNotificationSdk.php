<?php

namespace felipemouradev\SlackNotification;

use GuzzleHttp\Client;

class SlackNotificationSdk
{
    private $client = null;
    function __construct()
    {
        $this->client = new Client(['base_uri'=> getenv('ENDPOINT_SLACK_NOTIFICATION')]);
    }

    public function pack()
    {
        return "Hello Packagist! I am coming" . getenv('ENDPOINT_SLACK_NOTIFICATION');
    }

    public function notify($notificationIdOrSlug, $variables)
    {
        $this->client->requestAsync('POST', "notification/".$notificationIdOrSlug."/send", [
            'json' => $variables
        ]);
    }
}

