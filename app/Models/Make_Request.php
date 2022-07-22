<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make_Request extends Model
{
    use HasFactory;
    protected $table="make_request";
    protected $fillable = [
        'rank','verify_by','status','request_type','department','date','staff_name',
    ];

}
