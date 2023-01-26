<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postgroup extends Model
{
    use HasFactory;
    protected $table="postcode_group";
    protected $primaryKey = 'group_id';


    public function palletrates()
    {
        return $this->belongsTo(Palletrate::class, 'group_id' ,'group_id');
    }

    public function postcodes()
    {
        return $this->hasMany(Postcode::class, 'group_id' ,'group_id');
    }
}
