<?php
/*
BootSome is licensed under the Apache License 2.0 license
https://github.com/TRP-Solutions/boot-some/blob/master/LICENSE
*/
declare(strict_types=1);

class BootSomeDataBlock extends \TRP\HealDocument\Plugin {
	public static function datablock($parent,string $start, ?string $end = null){
		$div = $parent->el('div',['class'=>'db-label']);
		if($end===null) {
			$div->te($start);
		}
		else {
			$crow = $div->row();
			$crow->col('col-auto')->te($start);
			$crow->col('col-auto ms-auto text-end')->te($end);
		}
		return $parent->el('div',['class'=>'db-value']);
	}
}
