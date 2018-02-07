<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

namespace falcon\frontend\controllers\frontend;

use falcon\config\models\ConfigData;
use yii\base\Event;
use yii\web\Controller;

class IndexController extends Controller {

    /**
     * @return string the rendering result.
     */
    public function actionIndex() {
        $model = new ConfigData();

        $model->path = '123';
        $model->value = '321';

        $model->save();

        return $this->render('index');
    }
}