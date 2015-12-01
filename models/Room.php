<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Room".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Reservation
 */
class Room extends \yii\db\ActiveRecord
{

    /**
    * Returns true if the room is reserved, false if not.
    */
    public function getReserved() 
    {
        // if the reservation is blank, false is returned, as the room is not reserved
        return ($this->Reservation == '') ? false : true;
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name', 'Reservation'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Reservation' => 'Reservation',
        ];
    }
}
