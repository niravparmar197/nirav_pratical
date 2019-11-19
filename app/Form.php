<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\LastIdTrait;

class Form extends Model
{
	protected $table='forms';
	protected $fillable = [
		'name', 'email', 'number', 'minlength', 'maxlength', 'minvalue', 'maxvalue', 'url', 'filename'
	];
	public $timestamp=false;

	use LastIdTrait;
}
