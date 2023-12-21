<?php

namespace App\View\Components\Home;

use App\Models\Project;
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
    {
        $projects = Project::active()->lang()->count() ? Project::active()->lang()->get() : Project::active()->lang('en')->get();
//        dd(Project::active()->lang());
        foreach ($projects  as $item) {
            $categories = $item->categories->pluck('title')->toArray();
            $this->items[] = [
                'title' => $item->title,
                'description' => $item->content,
                'category' => $categories,
                'image' => 'https://place-hold.it/370x300',
                'link' => '#',
            ];
        }

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
