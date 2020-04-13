<?php

namespace gm\modules\weather;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/weather/admin/index']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://forecast7.com/';
        }
        return $url;
    }

    public function getLocation()
    {
        $location = $this->settings->get('location');
        if (empty($location)) {
            return '';
        }
        return $location;
    }
}
