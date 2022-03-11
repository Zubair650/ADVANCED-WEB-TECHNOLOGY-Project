<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model
{
    use HasFactory;
    protected $table ='otp_table';
    protected $fillable = [
        'name',
        'phone',
        'code'
    ];
}
