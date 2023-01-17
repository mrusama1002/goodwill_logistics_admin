<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palletrate extends Model
{


    use HasFactory;
    protected $table="palletrate";
    protected $guarded = ['_token'];
    protected $primaryKey = 'pallet_rate_id';
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'updated_date';


    public function serviceType(){
        return $this->belongsTo(ServiceType::class, 'service_type_id', 'service_type_id');
    }


    public function postCode(){
        return $this->belongsTo(Postcode::class, 'postcode_group_id', 'id');
    }

    public function group(){
        return $this->belongsTo(Postgroup::class, 'group_id', 'group_id');
    }






}



