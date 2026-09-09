<?php
/*
BootSome is licensed under the Apache License 2.0 license
https://github.com/TRP-Solutions/boot-some/blob/master/LICENSE
*/
declare(strict_types=1);
require_once '../lib/BootSomeCard.php';
\TRP\HealDocument\HealDocument::register_plugin('BootSomeCard');

require_once '../lib/BootSomeTables.php';
\TRP\HealDocument\HealDocument::register_plugin('BootSomeTable');

require_once '../lib/BootSomeDataBlock.php';
\TRP\HealDocument\HealDocument::register_plugin('BootSomeDataBlock');

$main = BootSome::$body->container();
$main->el('h1')->te('Card');

$row = $main->row();

$card = $row->col('col-8')->card();
$card->header('Card header',null,true);
$card->header_end()->icon('plus')->at(['onclick'=>"alert('New')"]);
$card->body()->el('code')->el('pre')->te("Some code;\n\tNest;\nEnd;",true);

$group = $card->listgroup();
$group->item()->te('Cras justo odio');
$group->item()->te('Dapibus ac facilisis in');
$group->item()->te('Vestibulum at eros');
$group->item('https://www.google.com/search?q=This+is+a+link')->te('This is a link');

$table = $card->table();

$tr = $table->thead()->tr();
$tr->th()->te('TH1');
$tr->th()->te('TH2');
$tr->th()->te('TH3');

$tbody = $table->tbody();
$tr = $tbody->tr();
$tr->td()->te('Beef leberkas kielbasa');
$tr->td()->te('Shoulder doner pork');
$tr->td()->te('Beef leberkas kielbasa kielbasa');

$tr = $tbody->tr();
$tr->td()->te('Beef leberkas kielbasa');
$tr->td()->te('Shoulder doner doner pork');
$tr->td()->te('Shoulder doner pork');

$tr = $tbody->tr();
$tr->td()->te('Beef leberkas leberkas kielbasa');
$tr->td()->te('Beef leberkas kielbasa');
$tr->td()->te('Shoulder doner pork');

$card->footer()->te('This is the end');

$card->footer()->button('Function','explosion','link');

$card = $row->col('col-4')->card();
$card->header('Card header','danger',true);
$card->header_end()->button('Add','add','secondary');
$body = $card->body();

$data = $body->datablock('Family name','[A]');
$data->at(['onclick' => "BootSome.copy(this,this.textContent.trim());"]);
$data->icon('copy')->te(' John Doe');

$data = $body->datablock('Postal address','[B]');
$data->te('123 Example Street'.PHP_EOL.'12345 Example City',true);
