<?php
/*
 * Yii2 Ide Helper
 * https://github.com/takashiki/yii2-ide-helper
 */

class Yii extends \yii\BaseYii
{
    /**
     * @var BaseApplication
     */
    public static $app;
}

/**
 * @property yii\caching\FileCache $cache
 * @property yii\swiftmailer\Mailer $mailer
 * @property Mis\IdeHelper\IdeHelper $ideHelper
 * @property yiier\helpers\RequestId $requestId
 * @property yii\db\Connection $db
 */
abstract class BaseApplication extends \yii\base\Application {}