<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'slug',
        'degree',
        'SAMA',
        'phone',
        'password',
        'image',
        'status',
        'biography',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    const UPLOAD_PATH = "upload/doctors";

    protected function image():Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset($value),
        );
    }

    protected function password():Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::make($value),
        );
    }

    public function scopeActive($query)
    {
        return $query->where("status",true);
    }

    public function Specialities()
    {
       return $this->belongsToMany(
            Disease::class,
            'doctor_professions',
            'doctor_id','disease_id',
            'id','id'
        );
    }
}
