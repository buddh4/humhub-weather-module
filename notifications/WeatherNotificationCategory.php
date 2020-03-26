<?php

namespace humhub\modules\weather\notifications;

use Yii;
use humhub\modules\notification\components\NotificationCategory;

/**
 * Description of AdminNotificationCategory
 *
 * @author buddha
 */
class WeatherNotificationCategory extends NotificationCategory
{

    public $id = 'weather';

    public $sortOrder = 100;

    public function getDescription()
    {
        return Yii::t('WeatherModule.notification', 'Receive Notifications for administrative events like available updates.');
    }

    public function getTitle()
    {
        return Yii::t('WeatherModule.notification', 'Administrative');
    }

}
