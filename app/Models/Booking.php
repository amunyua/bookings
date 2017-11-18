<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Booking
 * @package App\Models
 * @version November 15, 2017, 10:14 am UTC
 *
 * @property \App\Models\Room room
 * @property string name
 * @property integer room_id
 * @property bigInteger phone_number
 * @property string|\Carbon\Carbon start_time
 * @property string|\Carbon\Carbon end_date
 * @property boolean status
 */
class Booking extends Model
{

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'room_id',
        'phone_number',
        'start_time',
        'end_date',
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
        'room_id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class);
    }
}
