<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class OrderItem
 * @package App\Models
 * @version September 8, 2020, 3:15 am UTC
 *
 * @property string $item_description
 * @property string $quantity
 * @property string $order_id
 */
class OrderItem extends Model
{

    public $table = 'order_items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'item_description',
        'quantity',
        'order_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_description' => 'string',
        'quantity' => 'string',
        'order_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'item_description' => 'nullable|string|max:255',
        'quantity' => 'nullable|string|max:255',
        'order_id' => 'nullable|string|max:36'
    ];

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
}
