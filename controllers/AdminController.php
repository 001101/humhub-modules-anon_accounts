<?php

namespace humhub\modules\anon_accounts\controllers;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\libs\ProfileImage;
use humhub\modules\anon_accounts\forms\AnonAccountsForm;

class AdminController extends \humhub\modules\admin\components\Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex() {

        $form = new AnonAccountsForm;

        if (isset($_POST['AnonAccountsForm'])) {

            $form->attributes = $_POST['AnonAccountsForm'];

            if ($form->validate()) {

                $form->anonAccountsFirstNameOptions = Setting::SetText('anonAccountsFirstNameOptions', $form->anonAccountsFirstNameOptions);
                $form->anonAccountsLastNameOptions = Setting::SetText('anonAccountsLastNameOptions', $form->anonAccountsLastNameOptions);

                // set flash message
                Yii::$app->getSession()->setFlash('data-saved', 'Saved');

                return $this->redirect(Url::toRoute('index'));
            }

        } else {
            $form->anonAccountsFirstNameOptions = Setting::GetText('anonAccountsFirstNameOptions');
            $form->anonAccountsLastNameOptions = Setting::GetText('anonAccountsLastNameOptions');
        }

        return $this->render('index', array(
            'model' => $form
        ));

    }

}