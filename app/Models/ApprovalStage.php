<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalStage extends Model
{
    use HasFactory;
    protected $table="approval_level";
    protected $fillable = [
        'role','rank','department','request_type',
    ];
}
