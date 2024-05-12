<?php

namespace app\components;

use yii\base\Component;

class Menu extends Component
{
    private $model;

    public function init() {
        parent::init();

        $this->model = [
					['label' => 'Каталог товарів', 'url' => ['/one']],
					['label' => 'Каталог товарів1', 'url' => ['/site/one']]
				];
    }
		
		public function getAll() {
			return $this->model;
		}
}