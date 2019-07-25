<?php

namespace wdmg\pages\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use wdmg\pages\models\Pages;

/**
 * DefaultController implements actions for Pages model.
 */
class DefaultController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function beforeAction($action)
    {
        $this->layout = '@app/views/layouts/main';
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * View of page.
     *
     * @param string $page aliases of searching page.
     * @return mixed
     * @see Pages::$alias
     */
    public function actionIndex($page)
    {
        $model = $this->findModel($page);
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the Page model based on alias value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param string $alias
     * @return Page model
     * @throws NotFoundHttpException if the model not exist or not published
     */
    protected function findModel($alias)
    {
        $model = Pages::find()->where([
            'alias' => $alias,
            'status' => 1,
        ])->one();

        if (!is_null($model))
            return $model;
        else
            throw new NotFoundHttpException();

    }
}