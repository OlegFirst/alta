<?php

namespace app\components;

use yii\base\Component;
use Yii;

class CabinetMenu extends Component
{
    private $model;

    public function init() {
        parent::init();

        $this->model = [
					['url' => 'cabinet', 'text' => 'Мій кабінет', 'image' => '', 'alias' => 'myCabinet'],
					['url' => 'cabinet-personal-data', 'text' => 'Особисті дані', 'image' => 'img/profile-miniblock1.png', 'alias' => 'personalData'],
					['url' => 'cabinet-active-orders', 'text' => 'Активні замовлення', 'image' => 'img/profile-miniblock2.png', 'alias' => 'activeOrders'],
					['url' => 'cabinet-order-history', 'text' => 'Історія замовлень', 'image' => 'img/profile-miniblock3.png', 'alias' => 'orderHistory'],
					['url' => 'cabinet-discount-system', 'text' => 'Дисконтна система', 'image' => 'img/profile-miniblock4.png', 'alias' => 'discountSystem'],
					['url' => 'cabinet-selected-products', 'text' => 'Вибрані товари', 'image' => 'img/profile-miniblock5.png', 'alias' => 'selectedProducts'],
					['url' => 'cabinet-products-for-comparison', 'text' => 'Товари для порівняння', 'image' => 'img/profile-miniblock6.png', 'alias' => 'productsForComparison'],
					['url' => 'cabinet-reviewed-products', 'text' => 'Переглянуті товари', 'image' => 'img/profile-miniblock7.png', 'alias' => 'reviewedProducts'],
					
					['url' => 'cabinet-personal-data-two', 'text' => 'Особисті дані', 'image' => 'img/profile-miniblock1.png', 'alias' => 'personalDataTwo'],
					['url' => 'cabinet-active-orders-two', 'text' => 'Активні замовлення', 'image' => 'img/profile-miniblock2.png', 'alias' => 'activeOrdersTwo'],
					['url' => 'cabinet-order-history-two', 'text' => 'Історія замовлень', 'image' => 'img/profile-miniblock3.png', 'alias' => 'orderHistoryTwo'],
					['url' => 'cabinet-calculation-two', 'text' => 'Розрахунок', 'image' => 'img/profile2-miniblock4.png', 'alias' => 'calculationTwo'],
					['url' => 'cabinet-delayed-payment-two', 'text' => 'Відтермінування оплати', 'image' => 'img/profile2-miniblock5.png', 'alias' => 'delayedPaymentTwo'],
					['url' => 'cabinet-manager-two', 'text' => 'Менеджер', 'image' => 'img/profile2-miniblock6.png', 'alias' => 'managerTwo'],
					['url' => 'cabinet-agreements-two', 'text' => 'Договори', 'image' => 'img/profile2-miniblock7.png', 'alias' => 'agreementsTwo']
				];
    }
		
		public function get($alias) {
			$notFoundItem = ['url' => '#', 'text' => '', 'image' => '', 'alias' => ''];
			$resultItem = null;
			
			forEach ($this->model as $item) {
				if ($item['alias'] == $alias) {
					$resultItem = $item;
				}
			}
			
			return $resultItem ?? $notFoundItem;
		}
		
		public function getMenu() {
			if (Yii::$app->FrontendUser->is('physicalPerson')) {
				return $this->getPhysicalPersonMenu();
			}
			
			if (Yii::$app->FrontendUser->is('legalEntity')) {
				return $this->getLegalEntityMenu();
			}
			
			return [];
		}
		
		private function getPhysicalPersonMenu() {
			$aliasList = ['personalData', 'activeOrders', 'orderHistory', 'discountSystem', 'selectedProducts', 'productsForComparison', 'reviewedProducts'];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
		
		private function getLegalEntityMenu() {
			$aliasList = [
				'personalDataTwo', 'activeOrdersTwo', 'orderHistoryTwo', 'calculationTwo', 'delayedPaymentTwo', 'managerTwo', 'agreementsTwo', 'selectedProducts'
			];
			$menu = [];
			
			forEach($aliasList as $alias) {
				array_push($menu, $this->get($alias));
			}
			
			return $menu;
		}
}