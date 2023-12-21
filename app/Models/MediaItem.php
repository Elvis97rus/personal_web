<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'title', 'active', 'content', 'position', 'file'];

    public function scopeSkills($query){
        return $query->active()->where('key', 'skill-icon')->orderBy('position', 'asc');
    }

    public function scopeActive($query){
        return $query->where('active', true);
    }
}
