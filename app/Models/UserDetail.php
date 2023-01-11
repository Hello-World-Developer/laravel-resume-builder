<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'image',
        'user_id',
        'head_line',
        'phone_number',
        'address',
        'post_code',
        'city',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
