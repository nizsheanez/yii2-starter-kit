<?php
namespace backend\controllers;

/**
 * Site controller
 */
class SiteController extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = \Yii::$app->user->isGuest ? '_base' : 'main';
        return parent::beforeAction($action);
    }
}
