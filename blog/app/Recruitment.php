<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model

{
	protected $table='recruitment';
    protected $fillable = ['id',
        'title', 'image' ,'description', 'position','address_work','requirement','benefit','deadline','created_at',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
