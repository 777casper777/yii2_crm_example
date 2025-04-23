<?php
namespace app\services;

use app\models\ClientRequest;

class ClientRequestService
{
    public function process(int $id): bool
    {
        $model = ClientRequest::findOne($id);
        if (!$model || $model->status !== ClientRequest::STATUS_NEW) {
            return false;
        }

        $model->status = ClientRequest::STATUS_IN_PROGRESS;
        return $model->save(false);
    }
}