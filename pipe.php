<?php

// Get sencha2
require_once("../atsumi/init.php");

// Add class areas to the class loader
atsumi_Loader::references(array(
						'atsumi-live'	=> 'app live site',
						'atsumi' 		=> 'caster mvc widgets validators'
					));


// Initalise atsumi and the uri parser
$settings = new al_Settings();
Atsumi::initApp($settings);
Atsumi::app__setUriParser('uriparser_Gyokuro');


// Execute Atsumi
try {
	Atsumi::app__go($_SERVER['REDIRECT_URL']);
} catch(app_PageNotFoundException $e) {
	Atsumi::app__go("/404/");
}

// Render the processed output
Atsumi::app__render();

?>