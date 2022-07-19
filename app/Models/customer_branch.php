<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer_branch extends Model
{

    protected $table = '_customer_branch';

    
    protected $primaryKey = 'id';

     
    protected $fillable = ['namestore','address','phone', 'picture'];

    
}
