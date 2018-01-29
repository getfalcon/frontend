<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

namespace falcon\frontend;

class Module extends \falcon\core\base\Module {

	public function init() {
		parent::init();
	}

	public function events() {

		var_dump('#eee');

		return parent::events();
	}
}