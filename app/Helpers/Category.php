<?php

namespace App\Helpers;

class Category
{
    public static function getCategoryList(): array
    {
        return [
            'Laravel',
            'Tailwind.css',
            'Filament',
            'Alpine.js',
            'Vue3',
            'Javascript',
            'PHP',
            'SCSS',
            'REDUX',
        ];
    }
}
