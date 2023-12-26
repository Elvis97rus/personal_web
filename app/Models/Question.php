<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [ 'question',
                            'answer',
                            'category',
                            'position',
                            'lang',
                            'active' ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }
}
