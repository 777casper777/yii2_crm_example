<?php
namespace app\models;

use yii\db\ActiveRecord;

class ClientRequest extends ActiveRecord
{
    const STATUS_NEW = 'new';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_DONE = 'done';

    public static function tableName()
    {
        return 'client_requests';
    }

    public function rules()
    {
        return [
            [['client_name', 'request_text', 'status'], 'required'],
            ['status', 'in', 'range' => [self::STATUS_NEW, self::STATUS_IN_PROGRESS, self::STATUS_DONE]],
        ];
    }
}