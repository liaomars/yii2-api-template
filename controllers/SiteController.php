<?php

namespace app\controllers;

use Yii;

class SiteController extends \yii\rest\Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'hello Yii2';
    }

    /**
     * @return array
     */
    public function actionError(): array
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            Yii::error([
                'request_id' => Yii::$app->requestId->id,
                'exception' => $exception->getMessage(),
                'line' => $exception->getLine(),
                'file' => $exception->getFile(),
            ], 'response_data_error');
            return ['code' => $exception->getCode(), 'message' => $exception->getMessage()];
        }
        return [];
    }
}
