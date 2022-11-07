<?php

namespace App\View\Components\Headings;

use Illuminate\View\Component;

class SectionHeadings extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.headings.section-headings');
    }
}
