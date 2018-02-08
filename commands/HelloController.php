<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

namespace app\commands;

use  falcon\core\components\ComponentRegistrar;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller {
	/**
	 * This command echoes what you have entered as the message.
	 *
	 * @param string $message the message to be echoed.
	 */
	public function actionIndex($message = 'hello world') {
		echo $message . "\n";
		return ExitCode::OK;
	}
}
