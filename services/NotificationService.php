<?php
namespace app\services;

use Yii;

class NotificationService
{
    public function notifyClient($email, $subject, $message)
    {
        Yii::$app->mailer->compose()
            ->setTo($email)
            ->setSubject($subject)
            ->setTextBody($message)
            ->send();
    }
}