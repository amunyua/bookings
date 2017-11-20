<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Payment
 * @package App\Models
 * @version November 20, 2017, 8:58 am UTC
 *
 * @property integer name
 * @property integer room
 * @property float amount
 */
class Payment extends Model
{

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'room',
        'amount'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'integer',
        'room' => 'integer',
        'amount' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
