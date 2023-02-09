<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $title;
    public $poster;
    public $releasedate;
    public $overview;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $poster, $releasedate, $overview)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->releasedate = $releasedate;
        $this->overview = $overview;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
