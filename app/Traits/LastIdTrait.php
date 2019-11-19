<?php

namespace App\Traits;

trait LastIdTrait
{
	public static function getLastID()
	{
		$obj = Static::orderBy('id','desc')->first();

		if(!empty($obj->id))
			return $obj->id;

		return 0;
	}
}