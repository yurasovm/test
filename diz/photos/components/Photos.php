<?php namespace Diz\Photos\Components;

use Cms\Classes\ComponentBase;
use Diz\Photos\Models\Photos AS pModel;

class Photos extends ComponentBase
{
	public $albums;
	public function componentDetails(){
		return [
			'name'        => 'Фотоальбом',
			'description' => ''
		];
	}

	public function defineProperties(){
		return [];
	}

	public function onRun(){
		$this->albums	= pModel::where( 'visible', 1 )->orderBy( 'date', 'desc' )->get();
	}
}