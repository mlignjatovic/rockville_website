<?php

class Controller {

	public function beforeroute ($f3) {
		
		$f3->set('date',date("Y"));
	}
	public function afterroute () {

		echo \Template::instance()->render('layout/layout.html');

	}
}