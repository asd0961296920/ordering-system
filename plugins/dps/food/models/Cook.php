<?php namespace Dps\Food\Models;

use Model;

/**
 * Model
 */
class Cook extends Model
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
    public $table = 'dps_food_cook';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
public $attachMany   = [


'files' => 'System\Models\File'



];






}
