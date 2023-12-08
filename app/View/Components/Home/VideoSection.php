<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoSection extends Component
{
    public array $videos = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->videos = [
            [
                'videoId' => 'someVideoHash',
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at consequatur?'
            ],
            [
                'videoId' => 'someVideoHash2',
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at consequatur?'
            ],
            [
                'videoId' => 'someVideoHash3',
                'title' => 'Lorem ipsum dolor sit amet, consectetur.',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at consequatur?'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.video-section');
    }
}
