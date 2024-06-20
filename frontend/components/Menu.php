<?php

namespace app\components;
use yii\base\Component;

class Menu extends Component
{
		private $model;
		// Local host or host
		private $isLocalhost = true;

    public function init() {
        parent::init();

        $this->model = [
					['url' => '#', 'text' => '', 'alias' => ''],					
					['url' => '', 'text' => 'Головна', 'alias' => 'main'],					
					['url' => 'logout', 'text' => 'SignUp', 'alias' => 'signup'],
					['url' => 'logout', 'text' => 'SignOut', 'alias' => 'signout'],
					['url' => 'about', 'text' => 'Про компанію', 'alias' => 'about'],
					['url' => 'blog', 'text' => 'Блог', 'alias' => 'blog'],
					['url' => 'blog-article', 'text' => 'Статті', 'alias' => 'blogArticle'],
					['url' => 'price', 'text' => 'Прайс-лист', 'alias' => 'price'],
					['url' => 'discount-system', 'text' => 'Дисконтна система', 'alias' => 'discontSystem'],
					['url' => 'wholesalers', 'text' => 'Оптовикам', 'alias' => 'wholesalers'],
					['url' => 'delivery', 'text' => 'Доставка', 'alias' => 'delivery'],
					['url' => 'contacts', 'text' => 'Контакти', 'alias' => 'contacts'],
					['url' => 'faq', 'text' => 'Запитання', 'alias' => 'faq'],
					['url' => 'calculator', 'text' => 'Калькулятор', 'alias' => 'calculator'],
					['url' => 'products-catalog', 'text' => 'Каталог товарів', 'alias' => 'productsCatalog'],
					['url' => 'products-catalog-popular', 'text' => 'Популярні товари', 'alias' => 'productsCatalogPopular'],
					['url' => 'products-catalog-popular-list', 'text' => 'Популярні товари', 'alias' => 'productsCatalogPopularList']
				];
				
				if ($this->isLocalhost) {
					$this->localhostModelCorrection();
				} else {
					$this->remoteHostModelCorrection();
				}
    }
		
		private function localhostModelCorrection() {
			$currentMenu = array_map(function($item) {
				return [
					'url' => '/alta/'.$item['url'],
					'text' => $item['text'],
					'alias' => $item['alias']
				];
			}, $this->model);
			
			$this->model = $currentMenu;
		}
		
		private function remoteHostModelCorrection() {
			$currentMenu = array_map(function($item) {
				return [
					'url' => '/'.$item['url'],
					'text' => $item['text'],
					'alias' => $item['alias']
				];
			}, $this->model);
			
			$this->model = $currentMenu;
		}
		
		public function get($alias) {
			$notFoundItem = ['url' => '#', 'text' => '', 'alias' => ''];
			$index = array_search($alias, array_column($this->model, 'alias'));
			
			return $index == true ? $this->model[$index] : $notFoundItem;
		}
		
		public function getHeaderMenu() {
			$aliasList = ['about', 'blog', 'price', 'discontSystem', 'wholesalers', 'delivery', 'contacts', 'faq', 'calculator'];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
		
		public function getFooterMenu() {
			$aliasList = ['about', 'blog', 'price', 'discontSystem', 'wholesalers', 'delivery', 'contacts'];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
		
		// $this->model = [
					// ['url' => '#', 'text' => '', 'alias' => ''],					
					// ['url' => '/alta', 'text' => 'Головна', 'alias' => 'main'],					
					// // Hosting
					// // ['url' => '/', 'text' => 'Головна', 'alias' => 'main'],					
					// ['url' => 'logout', 'text' => 'SignUp', 'alias' => 'signup'],
					// ['url' => 'logout', 'text' => 'SignOut', 'alias' => 'signout'],
					// ['url' => '/alta/about', 'text' => 'Про компанію', 'alias' => 'about'],
					// ['url' => 'blog', 'text' => 'Блог', 'alias' => 'blog'],
					// ['url' => 'blog-article', 'text' => 'Статті', 'alias' => 'blogArticle'],
					// ['url' => 'price', 'text' => 'Прайс-лист', 'alias' => 'price'],
					// ['url' => 'discount-system', 'text' => 'Дисконтна система', 'alias' => 'discontSystem'],
					// ['url' => 'wholesalers', 'text' => 'Оптовикам', 'alias' => 'wholesalers'],
					// ['url' => 'delivery', 'text' => 'Доставка', 'alias' => 'delivery'],
					// ['url' => 'contacts', 'text' => 'Контакти', 'alias' => 'contacts'],
					// ['url' => 'faq', 'text' => 'Запитання', 'alias' => 'faq'],
					// ['url' => 'calculator', 'text' => 'Калькулятор', 'alias' => 'calculator'],
					// ['url' => 'products-catalog', 'text' => 'Каталог товарів', 'alias' => 'productsCatalog'],
					// ['url' => 'products-catalog-popular', 'text' => 'Популярні товари', 'alias' => 'productsCatalogPopular'],
					// ['url' => 'products-catalog-popular-list', 'text' => 'Популярні товари', 'alias' => 'productsCatalogPopularList']
				// ];
}