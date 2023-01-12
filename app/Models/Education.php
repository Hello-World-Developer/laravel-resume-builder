<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'degree',
        'school',
        'city',
        'start_date',
        'end_date',
        'description'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
