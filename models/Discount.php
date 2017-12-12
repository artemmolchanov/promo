<?php

namespace app\models;

/**
 * This is the model class for table "discount".
 *
 * @property integer $id
 * @property string $name
 * @property string $zone
 * @property string $start
 * @property string $ending
 * @property integer $status
 * @property double $remuneration
 */
class Discount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discount';
    }

    public function fields(){
        return [
            'start',
            'ending',
            'remuneration',
            'zone',
            'status'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start', 'ending'],  'validateDate'],
            [['start', 'ending'],  'required'],
            [['status'], 'integer'],
            [['remuneration'], 'number'],
            [['remuneration'], 'required'],
            [['name', 'zone'], 'string', 'max' => 255],
            [['name', 'zone'], 'required']
        ];
    }

    public function validateDate()
    {
        if($this->start < date("Y-m-d")){
            $this->addError('start','Еnter correct date');
        }
        if ($this->start > $this->ending){
            $this->addError('ending','Еnter correct date');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'zone' => 'Zone',
            'start' => 'Start',
            'ending' => 'Ending',
            'status' => 'Status',
            'remuneration' => 'Remuneration',
        ];
    }
}
