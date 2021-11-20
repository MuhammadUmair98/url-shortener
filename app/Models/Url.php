<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Url extends Model
{
    use HasFactory;
    protected $appends = ['shortened_url'];
    protected $fillable = ['destination', 'slug'];
    public $timestamps = true;

    public function getShortenedUrlAttribute() {
        return url('/').'/'.$this->slug;
    }

    public function getCreatedAtAttribute($date) {
        return Carbon::parse($date)->format('d-M-Y g:i A');
    }

}
