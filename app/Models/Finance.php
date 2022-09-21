<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'finances';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['revenue', 'expenses', 'user_id', 'sum'];

    
}
