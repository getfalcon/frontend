<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

namespace falcon\frontend\controllers\backend;

use yii\web\Controller;

class IndexController extends Controller {
	public function actionIndex() {
		return $this->render('index');
	}
}