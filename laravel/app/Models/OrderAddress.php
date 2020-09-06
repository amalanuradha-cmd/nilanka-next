<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class OrderAddress
 * @package App\Models
 * @version September 6, 2020, 7:41 am UTC
 *
 * @property string $street
 * @property string $city
 * @property string $postal_code
 * @property string $date
 * @property string $time
 * @property string $order_uuid
 */
class OrderAddress extends Model
{

    public $table = 'order_addresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'street',
        'city',
        'postal_code',
        'date',
        'time',
        'order_uuid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'street' => 'string',
        'city' => 'string',
        'postal_code' => 'string',
        'date' => 'string',
        'time' => 'string',
        'order_uuid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'street' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:255',
        'date' => 'nullable|string|max:255',
        'time' => 'nullable|string|max:255',
        'order_uuid' => 'nullable|string|max:255'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
