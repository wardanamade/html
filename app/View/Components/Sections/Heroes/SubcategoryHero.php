<?php

namespace App\View\Components\Sections\Heroes;

use Illuminate\View\Component;

class SubcategoryHero extends Component
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
        return view('components.sections.heroes.subcategory-hero');
    }
}
