<?php

namespace App\Repositories;

use App\Models\OrderAddress;
use App\Repositories\BaseRepository;

/**
 * Class OrderAddressRepository
 * @package App\Repositories
 * @version September 6, 2020, 7:41 am UTC
*/

class OrderAddressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'street',
        'city',
        'postal_code',
        'date',
        'time',
        'order_uuid'
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
        return OrderAddress::class;
    }
}
