<?php namespace Dps\Food\Models;

use Model;

/**
 * Model
 */
class Rabbeass extends Model
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
    public $table = 'dps_food_rabbiteass';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
