<?php

namespace App\Models;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Order
 * @package App\Models
 * @version September 3, 2020, 9:10 am UTC
 *
 * @property string $customer
 * @property string $barcode
 * @property string $type
 * @property string $address
 * @property string $date
 * @property string $time
 * @property string $recipient_mobile
 * @property string $recipient_name
 * @property string $delivery_street
 * @property string $delivery_city
 * @property string $deliver_zip
 * @property string $item_description
 * @property string $quantity
 * @property string $total_weight
 * @property string $dimension
 * @property string $payment_type
 * @property string $cod_amount
 * @property string $sender_name
 * @property string $sender_phone
 * @property string $sender_message
 */
class Order extends Model
{

    public $table = 'orders';

    private $uuid;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $guarded = []; // YOLO

    
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(),(string) Uuid::uuid4());
        });
    }

    public $primaryKey = 'uuid';

    public $keyType = 'string';

    public $incrementing = false;

    public $fillable = [
        'id',
        'user_id',
        'customer',
        'barcode',
        'type',
        'address',
        'date',
        'time',
        'recipient_mobile',
        'recipient_name',
        'delivery_street',
        'delivery_city',
        'deliver_zip',
        'item_description',
        'quantity',
        'total_weight',
        'dimension',
        'payment_type',
        'cod_amount',
        'sender_name',
        'sender_phone',
        'sender_message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'string',
        'customer' => 'string',
        'barcode' => 'string',
        'type' => 'string',
        'address' => 'string',
        'date' => 'string',
        'time' => 'string',
        'recipient_mobile' => 'string',
        'recipient_name' => 'string',
        'delivery_street' => 'string',
        'delivery_city' => 'string',
        'deliver_zip' => 'string',
        'item_description' => 'string',
        'quantity' => 'string',
        'total_weight' => 'string',
        'dimension' => 'string',
        'payment_type' => 'string',
        'cod_amount' => 'string',
        'sender_name' => 'string',
        'sender_phone' => 'string',
        'sender_message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|string|max:255',
        'customer' => 'nullable|string|max:255',
        'barcode' => 'nullable|string|max:255',
        'type' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'date' => 'nullable|string|max:255',
        'time' => 'nullable|string|max:255',
        'recipient_mobile' => 'nullable|string|max:255',
        'recipient_name' => 'nullable|string|max:255',
        'delivery_street' => 'nullable|string|max:255',
        'delivery_city' => 'nullable|string|max:255',
        'deliver_zip' => 'nullable|string|max:255',
        'item_description' => 'nullable|string|max:255',
        'quantity' => 'nullable|string|max:255',
        'total_weight' => 'nullable|string|max:255',
        'dimension' => 'nullable|string|max:255',
        'payment_type' => 'nullable|string|max:255',
        'cod_amount' => 'nullable|string|max:255',
        'sender_name' => 'nullable|string|max:255',
        'sender_phone' => 'nullable|string|max:255',
        'sender_message' => 'nullable|string|max:255'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function order_address()
    {
        return $this->hasOne('App\Models\OrderAddress', 'order_uuid', 'uuid');
    }

    public function order_items()
    {
        return $this->hasMany('App\Models\OrderItem', 'order_id', 'uuid');
    }
}
