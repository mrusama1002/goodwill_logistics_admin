<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postgroup extends Model
{
    use HasFactory;
    protected $table="postcode_group";
    protected $primaryKey = 'group_id';



}
