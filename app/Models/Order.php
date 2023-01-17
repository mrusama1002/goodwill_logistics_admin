<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $guarded = ['_token'];
    protected $primaryKey = 'id';

    function transaction()
    {
        return $this->belongsTo(Transaction::class, 'id', 'Order_Id');
    }
    function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id', 'service_type_id');
    }
    function orderdetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    function coloption()
    {
        return $this->belongsTo(CollectionOption::class, 'collectionOption', 'collection_option_id');
    }
    function deloption()
    {
        return $this->belongsTo(DeliveryOption::class, 'deliveryOption', 'delivery_option_id');
    }
}
