<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function userDetail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public  function education()
    {
        return $this->hasOne(Education::class);
    }
}
