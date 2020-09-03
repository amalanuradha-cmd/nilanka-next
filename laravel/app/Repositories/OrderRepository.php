<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\BaseRepository;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version September 3, 2020, 9:10 am UTC
*/

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
