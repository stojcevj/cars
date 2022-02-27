<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsList extends Model
{
    use HasFactory;
    protected $table = 'cars_lists';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'marka',
        'model',
        'godina',
        'user_id',
        'image'
    ];
}
