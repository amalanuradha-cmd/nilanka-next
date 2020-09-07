<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class City
 * @package App\Models
 * @version September 7, 2020, 4:53 am UTC
 *
 * @property string $district_id
 * @property string $name_en
 * @property string $name_si
 * @property string $name_ta
 * @property string $sub_name_en
 * @property string $sub_name_si
 * @property string $sub_name_ta
 * @property string $postcode
 * @property string $latitude
 * @property string $longitude
 */
class City extends Model
{

    public $table = 'cities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'district_id',
        'name_en',
        'name_si',
        'name_ta',
        'sub_name_en',
        'sub_name_si',
        'sub_name_ta',
        'postcode',
        'latitude',
        'longitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'district_id' => 'string',
        'name_en' => 'string',
        'name_si' => 'string',
        'name_ta' => 'string',
        'sub_name_en' => 'string',
        'sub_name_si' => 'string',
        'sub_name_ta' => 'string',
        'postcode' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'district_id' => 'nullable|string|max:255',
        'name_en' => 'nullable|string|max:255',
        'name_si' => 'nullable|string|max:255',
        'name_ta' => 'nullable|string|max:255',
        'sub_name_en' => 'nullable|string|max:255',
        'sub_name_si' => 'nullable|string|max:255',
        'sub_name_ta' => 'nullable|string|max:255',
        'postcode' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:255',
        'longitude' => 'nullable|string|max:255'
    ];

    
}
