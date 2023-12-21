<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'heading', 'stack', 'tasks', 'skills', 'active', 'position', 'lang'];

    public function scopeActive($query)
    {
        return $query->where('active', true)->orderBy('position', 'asc');
    }

    public function scopeLang($query, $lang = null)
    {
        return $query->where('lang', $lang ?? App::currentLocale());
    }
}
