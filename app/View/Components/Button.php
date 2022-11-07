<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * The button type.
     *
     * @var string
     */
    public $type;

    /**
     * The button text.
     *
     * @var string
     */
    public $text;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @param  string  $text
     * @return void
     */
    public function __construct($type, $text)
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
