<?php
/**
 * decoy_skeleton.
 * User: Tibi
 * Date: 2015.12.01.
 * Time: 15:02
 */

namespace Application\Controller;


use decoy\base\RestFulController;

class RestDemo extends RestFulController
{
	public function index(){
		$this->forward()->getResponse()->responseCode(200);
		return array(
			'key'=>'value'
		);
	}
}