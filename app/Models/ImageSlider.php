<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
    use HasFactory;
    public function getImageAttribute($value)
    {
        return !empty($value) ? url(\Storage::url($value)) : null;
    }
}
