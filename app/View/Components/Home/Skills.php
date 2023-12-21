<?php

namespace App\View\Components\Home;

use App\Models\Experience;
use App\Models\MediaItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Skills extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $icons, public Collection $experiences)
    {
        $this->icons = MediaItem::skills()->get();
        $this->experiences = Experience::active()->lang()->count() ? Experience::active()->lang()->get() : Experience::active()->lang('en')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.skills');
    }
}
