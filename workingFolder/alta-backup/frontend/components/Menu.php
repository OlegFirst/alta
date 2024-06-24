<?php

namespace app\components;

use yii\base\Component;

class Menu extends Component
{
    private $model;

    public function init()
    {
        parent::init();

        $this->model = [
					['url' => '#', 'text' => '', 'alias' => ''],
					['url' => '/alta', 'text' => 'Головна', 'alias' => 'main'],
					['url' => 'about', 'text' => 'Про компанію', 'alias' => 'about'],
					['url' => 'blog', 'text' => 'Блог', 'alias' => 'blog'],
					['url' => 'price', 'text' => 'Прайс-лист', 'alias' => 'price'],
					['url' => 'discount-system', 'text' => 'Дисконтна система', 'alias' => 'discontSystem'],
					['url' => 'wholesalers', 'text' => 'Оптовикам', 'alias' => 'wholesalers'],
					['url' => 'delivery', 'text' => 'Доставка', 'alias' => 'delivery'],
					['url' => 'contacts', 'text' => 'Контакти', 'alias' => 'contacts'],
					['url' => 'faq', 'text' => 'Запитання', 'alias' => 'faq'],
					['url' => 'calculator', 'text' => 'Калькулятор', 'alias' => 'calculator']
				];
    }
		
		public function get($alias) 
		{
			$notFoundItem = ['url' => '#', 'text' => '', 'alias' => ''];			
			$index = array_search($alias, array_column($this->model, 'alias'));
			
			return $index == true ? $this->model[$index] : $notFoundItem;
		}
		
		public function getHeaderMenu()
		{
			$aliasList = ['about', 'blog', 'price', 'discontSystem', 'wholesalers', 'delivery', 'contacts', 'faq', 'calculator'];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
		
		public function getFooterMenu()
		{
			$aliasList = ['about', 'blog', 'price', 'discontSystem', 'wholesalers', 'delivery', 'contacts'];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
}