<?php

require_once 'functions.php';

$website_settings = [
	'title' => '@tekeia',
	'home' => '@tekeia',
	'page_title' => 'tekeia',
	'page_description' => 'List of all my ship wreaks',
	'copyright' => 'Copyright &copy; @tekeia %s',
];

$portfolio_collection = [
	[
		'container_class' => 'col-md-3 img-portfolio',
		'img_class' => 'img-responsive img-hover',
		'portfolio_link' => 'portfolio-item.php',
		'img_link' => 'http://lorempixel.com/g/750/450',
	],
	[
		'container_class' => 'col-md-3 img-portfolio',
		'img_class' => 'img-responsive img-hover',
		'portfolio_link' => 'portfolio-item.php',
		'img_link' => 'http://lorempixel.com/g/750/450',
	],
	[
		'container_class' => 'col-md-3 img-portfolio',
		'img_class' => 'img-responsive img-hover',
		'portfolio_link' => 'portfolio-item.php',
		'img_link' => 'http://lorempixel.com/g/750/450',
	],
	[
		'container_class' => 'col-md-3 img-portfolio',
		'img_class' => 'img-responsive img-hover',
		'portfolio_link' => 'portfolio-item.php',
		'img_link' => 'http://lorempixel.com/g/750/450',
	],
];

$portfolio_collection = array_merge(
	$portfolio_collection,
	$portfolio_collection,
	$portfolio_collection
);
