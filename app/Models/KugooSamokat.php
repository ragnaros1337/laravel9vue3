<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KugooSamokat extends Model
{
    use HasFactory;

	protected $fillable = [
            'name',
            'сapacity',
			'power',
			'speed',
			'hours',
			'price',
			'discount_price'
	];
}
