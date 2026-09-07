<?php
/*
BootSome is licensed under the Apache License 2.0 license
https://github.com/TRP-Solutions/boot-some/blob/master/LICENSE
*/
declare(strict_types=1);
require_once '../../fancy-filter/lib/FancyFilter.php'; // https://github.com/TRP-Solutions/fancy-filter

require_once '../lib/BootSomeTables.php';
\TRP\HealDocument\HealDocument::register_plugin('BootSomeTable');

require_once '../lib/BootSomeForms.php';
\TRP\HealDocument\HealDocument::register_plugin('BootSomeForms');

BootSome::$head->el('script',['src'=>'../../fancy-filter/lib/fancyfilter.js']);
BootSome::$head->el('script')->te("Ufo.data.set('ln',{'warning_popup_blocked':'Popup blocked!'});");

$main = BootSome::$body->container();
$main->el('h1')->te('Ajax');

$form = $main->form('.','post')->form_inline();
$form->button('Trigger')->at(['onclick'=>"FancyFilter.set('global','popup','open')"]);;

BootSome::$body->at(['onload' => "Ufo.interval('clock',10);Ufo.get('clock','clock.php');"],true);
$main->el('div',['id' => 'clock'])->spinner();
