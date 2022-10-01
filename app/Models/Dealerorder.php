<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealerorder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealerorders';

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
    protected $fillable = ['nameproduct', 'amount', 'price', 'picture', 'idproduct', 'user_id', 'status', 'cus_id'];

    
}
