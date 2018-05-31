<?php

namespace humhub\modules\weather;

use Yii;
use yii\helpers\Url;
use humhub\modules\weather\widgets\WeatherFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => 'Weather Settings',
            'url' => Url::toRoute('/weather/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-cloud"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'weather' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addWeatherFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(WeatherFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'weather')
        ]);
    }
}
