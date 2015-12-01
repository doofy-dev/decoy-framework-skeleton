<?php
/**
 * Created by PhpStorm.
 * User: Tibi
 * Date: 2015.11.17.
 * Time: 9:46
 */

namespace Application\Controller;


use decoy\base\ActionController;
use decoy\view\ViewModel;

class Application extends ActionController
{
	public function _Bootstrap()
	{
		if($this->getUrlParameter('type')=='txt')
		{
			$this->setTemplate('application/text');
		}else{
			$this->setTemplate('application/layout');
		}
	}

	public function index()
	{
		$view = new ViewModel('application/text');
		$view->addVariable('content','Sample content');
		return $view;
	}

}