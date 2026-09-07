<?php
/*
BootSome is licensed under the Apache License 2.0 license
https://github.com/TRP-Solutions/boot-some/blob/master/LICENSE
*/
declare(strict_types=1);
require_once('../../heal-document/lib/HealDocument.php'); // https://github.com/TRP-Solutions/heal-document
require_once '../../ufo-ajax/lib/ufo.php'; // https://github.com/TRP-Solutions/ufo-ajax
require_once '../../fancy-filter/lib/FancyFilter.php'; // https://github.com/TRP-Solutions/fancy-filter
require_once('../lib/BootSome.php');

$filter = \TRP\FancyFilter\FancyFilter::get('global');

$doc = new BootSome();
$doc->te(date('H:i:s'));

if($filter->popup == 'open') {
	$doc->te(' (popup)');
	$filter->set('popup',null);
	Ufo::call('popup','https://github.com/trp-solutions');
}

Ufo::output('clock',$doc);
