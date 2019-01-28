## Slack Notification SDK

**Installing**
```bash
composer require felipemouradev/slack-notification-sdk
```

**Usage**
```php
use \felipemouradev\SlackNotification\SlackNotificationSdk;

SlackNotificationSdk::notify('YOUR_TEMPLATE',
    [
        "variable_1" => "content variable 1",
        "variable_2" => "content variable 2"
    ]
);
```

