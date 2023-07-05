<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $casts = [
    //     'start_date'  => 'date:j F, Y',
    // ];

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = date('Y-m-d', strtotime($value));
    }

    public function getStartDateAttribute($value)
    {
        return date('j F, Y', strtotime($value));
    }

    protected function endDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date('j F, Y', strtotime($value)),
            set: fn ($value) => date('Y-m-d', strtotime($value)),
        );
    }
}
