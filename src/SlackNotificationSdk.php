<?php

namespace felipemouradev\SlackNotification;

use GuzzleHttp\Client;

class SlackNotificationSdk
{
    private static function getClient()
    {
        return new Client(['base_uri' => getenv('ENDPOINT_SLACK_NOTIFICATION')]);
    }

    public static function notify($notificationIdOrSlug, $variables)
    {
        try {
            $data = self::getClient()->request('POST', "notification/" . $notificationIdOrSlug . "/send", [
                'json' => $variables
            ]);
            echo $data->getStatusCode();
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }
}

