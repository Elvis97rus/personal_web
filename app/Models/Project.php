<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'active', 'content', 'position', 'link', 'file', 'lang'];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeLang($query, $lang = null)
    {
        return $query->where('lang', $lang ?? App::currentLocale());
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_project', 'project_id', 'category_id');
    }
}
