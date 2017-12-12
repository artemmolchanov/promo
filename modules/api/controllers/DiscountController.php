<?php

namespace app\modules\api\controllers;

use app\models\Discount;
use yii\web\NotFoundHttpException;

/**
 * Class DiscountController
 *
 * @package app\modules\api\controllers
 */
class DiscountController extends Controller
{
    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function actionIndex(){
        return Discount::find()->all();
    }

    /**
     * @param $name
     *
     * @return null|static
     * @throws NotFoundHttpException
     */
    public function actionGetDiscountInfo($name)
    {
        $discount = Discount::findOne(['name' => $name]);
        if ($discount === null) {
            throw new NotFoundHttpException('Discount does not exist');
        }

        return $discount;
    }

    /**
     * @param $name
     * @param $zone
     *
     * @return mixed
     */
    public function actionActivateDiscount($name, $zone)
    {
        $discount = Discount::find()->where(['name' => $name, 'zone' => $zone])->one();

        return $discount->remuneration;
    }
}
