<?php

namespace App\View\Components\Note;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardButton extends Component
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
        return view('components.note.card-button');
    }
}
