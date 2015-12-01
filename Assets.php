<?php

namespace humhub\modules\anon_accounts;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $js = [
        'jdenticon-1.3.0.min.js',
        'md5.min.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}