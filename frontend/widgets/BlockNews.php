<?php
	namespace frontend\widgets;

	class BlockNews extends \yii\bootstrap5\Widget {
		public $model;
		public $isTextShow;
		public $formModel;
		public $activeFormAttributes;
		
		public function run() {
			return $this->render('blockNews', [
				'model' => $this->model,
				'isTextShow' => $this->isTextShow,
				'formModel' => $this->formModel,
				'activeFormAttributes' => $this->activeFormAttributes
			]);
		}
	}