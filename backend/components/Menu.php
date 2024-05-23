<?php
namespace app\components;
use yii\base\Component;

class Menu extends Component
{
    private $model;

    public function init() {
        parent::init();

        $this->model = [
					['url' => 'blog', 'label' => 'Блог']
				];
    }
		
		public function getAll() {
			return $this->model;
		}
}