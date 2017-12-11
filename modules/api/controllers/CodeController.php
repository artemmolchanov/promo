<?php

namespace app\modules\api\controllers;

use app\models\Code;
use yii\web\NotFoundHttpException;

class CodeController extends Controller
{

    public function actionIndex(){
        return Code::find()->all();
    }

    public function actionGetDiscountInfo($name)
    {
        $discount = Code::findOne(['name' => $name]);
        if ($discount === null) {
            throw new NotFoundHttpException('Discount does not exist');
        }

        return $discount;
    }

    public function actionActivateDiscount($name, $zone)
    {
        $discount = Code::find()->where(['name' => $name, 'zone' => $zone])->one();

        return $discount->remuneration;
    }
}
