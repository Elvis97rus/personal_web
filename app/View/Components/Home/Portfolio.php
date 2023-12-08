<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {   // TODO DB + Filament
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Fullstack e-shop application with Laravel, Tailwind and Vue3',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['Laravel', 'Tailwind.css', 'Filament', 'Alpine.js'],
                'title' => 'Blog application with Laravel, Tailwind, Alpine.js and Filament Admin panel',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['Laravel', 'Tailwind.css', 'Filament', 'Alpine.js'],
                'title' => 'Company service application with Laravel, Tailwind, Alpine.js and Filament Admin panel',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['Javascript', 'SCSS', 'REDUX'],
                'title' => 'Pet project in pure Javascript, kind of replica from google online spreadsheets.',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['PHP', 'Laravel', 'Javascript'],
                'title' => 'Pet project with useful functionality which can be used often in many projects.',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['Laravel', 'Filament'],
                'title' => 'Pet project with useful information and different courses and study materials you can use.',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ],[
                'category' => ['Laravel', 'Filament'],
                'title' => 'Pet project with frequently asked questions in job interviews.',
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ]
        ];
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
