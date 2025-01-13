<?php

namespace App\View\Components\Note;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $content;
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function render(): View|Closure|string
    {
        return view('components.note.card');
    }
}
