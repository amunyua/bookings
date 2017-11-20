<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Room
 * @package App\Models
 * @version November 15, 2017, 9:19 am UTC
 *
 * @property string name
 * @property string description
 * @property float price
 */
class Room extends Model
{

    public $table = 'rooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'description',
        'price',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'price' => 'float',
        'url'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      'name'=>'required|unique:rooms,name'
    ];

    
}
