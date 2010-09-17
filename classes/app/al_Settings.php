<?php

class al_Settings extends atsumi_AbstractAppSettings {

	protected $settings = array(
		'debug'		=> true
	);

	public function __construct() {

	}


	public function init_specification () {

		return	array(
			''				=> 'al_SiteController'
		);

	}
}


?>