<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOption extends Model
{
    use HasFactory;
    protected $table="delivery_option";
    protected $guarded = ['_token'];
    protected $primaryKey = 'id';

    
}
