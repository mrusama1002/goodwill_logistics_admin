<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionOption extends Model
{
    use HasFactory;
    protected $table="collection_option";
    protected $guarded = ['_token'];
    protected $primaryKey = 'id';

    
}
