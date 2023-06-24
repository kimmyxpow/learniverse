<?php

namespace App\View\Components;

use App\Models\Subject;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LandingGuest extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $subjects = Subject::groupBy('subject')->get('subject');
        $levels = Subject::groupBy('level')->get('level');
        return view('components.landing-guest', ['subjects' => $subjects, 'levels' => $levels]);
    }
}
