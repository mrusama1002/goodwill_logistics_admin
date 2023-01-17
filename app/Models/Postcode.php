<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcode extends Model
{
    use HasFactory;
    protected $table="post_code";
    protected $guarded = ['_token'];
    protected $primaryKey = 'id';

     public $timestamps = false;

     public function group(){
         return $this->belongsTo(Postgroup::class, 'group_id', 'group_id');
     }
}
