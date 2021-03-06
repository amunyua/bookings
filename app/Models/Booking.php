<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Booking
 * @package App\Models
 * @version November 20, 2017, 8:58 am UTC
 *
 * @property string name
 * @property integer room
 * @property string phone_number
 * @property integer nights
 * @property boolean status
 */
class Booking extends Model
{

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'room',
        'phone_number',
        'nights',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'room' => 'integer',
        'phone_number' => 'string',
        'nights' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'=>'required',
        'phone_number'=> 'required',

    ];

    
}
