<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTitleAttribute($value)
    {
        return $value ?? 'Service';
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords(trim($value));
    }
}
