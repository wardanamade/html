<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ticket extends Component
{
    /**
     * The component type.
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->type = 'open';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ticket');
    }
}
