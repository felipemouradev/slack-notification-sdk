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
            self::getClient()->request('POST', "notification/" . $notificationIdOrSlug . "/send", [
                'json' => $variables
            ]);
        } catch (\Exception $exception) {
//            throw $exception;
        }
    }
}

