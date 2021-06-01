<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\CallMe as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class callMe extends Model //Authenticatable
{
    use HasFactory; // , Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone_number',
    ];
}