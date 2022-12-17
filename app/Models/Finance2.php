<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance2 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'finance2s';

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
    protected $fillable = ['month', 'sum2', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id' , 'id'); 
    }
}
