<?php namespace Dps\Order\Models;

use Model;

/**
 * Model
 */
class CCC extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dps_order_orderdetails';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
