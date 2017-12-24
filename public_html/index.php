<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../framework_yii2/vendor/autoload.php'); // todo - Move Vendor in root dir?
require(__DIR__ . '/../framework_yii2/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../framework_yii2/common/config/bootstrap.php');
require(__DIR__ . '/../framework_yii2/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
	require(__DIR__ . '/../framework_yii2/common/config/main.php'),
	require(__DIR__ . '/../framework_yii2/common/config/main-local.php'),
	require(__DIR__ . '/../framework_yii2/frontend/config/main.php'),
	require(__DIR__ . '/../framework_yii2/frontend/config/main-local.php')
);

(new yii\web\Application($config))->run();
