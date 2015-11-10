<?php

namespace humhub\modules\anon_accounts;

use Yii;
use yii\helpers\Url;


class Events extends \yii\base\Object
{
    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param type $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('AnonAccountsModule.base', 'Anon Accounts'),
            'url' => Url::to(['/anon_accounts/admin/index']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-paw"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'anon_accounts' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 580,
        ));
    }

}