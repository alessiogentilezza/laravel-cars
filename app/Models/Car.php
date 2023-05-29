<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Optional;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'cc',
        'year_release'
    ]; 

    public function optionals(){
        return $this->belongsToMany(Optional::class);
    }
}
